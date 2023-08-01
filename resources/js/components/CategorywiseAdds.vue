<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form @submit.prevent="saveCategorywiseAdd">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group mt-2">
                                    <label for="title">Title:</label>
                                    <input type="text" name="title" v-model="categorywiseadd.title" id="title"
                                        class="form-control shadow-none">
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <div class="form-group mt-2">
                                            <label for="url">URL:</label>
                                            <input type="url" name="url" v-model="categorywiseadd.url" id="url"
                                                class="form-control shadow-none">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mt-2">
                                            <label for="category">Category:</label>
                                            <v-select :options="categories" name="category_id" id="category"
                                                v-model="selectedCategory" label="name"></v-select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12 text-end">
                                        <button type="button" @click="clearData"
                                            class="btn btn-sm btn-outline-secondary shadow-none">
                                            Reset
                                        </button>
                                        <button type="submit" class="btn btn-sm btn-outline-success shadow-none">
                                            Save Categorywiseadd
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex justify-content-center align-items-center">
                                <div class="form-group ImageBackground">
                                    <span class="text-danger">Required Size: width:350px X height:470px</span>
                                    <img :src="imageSrc" class="imageShow" />
                                    <label for="image">Image</label>
                                    <input type="file" id="image" class="form-control shadow-none" @change="imageUrl" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-12" style="overflow-x: auto">
            <vue-good-table :columns="columns" :rows="categorywiseadds" :fixed-header="true" :pagination-options="{
                enabled: true,
                perPage: 15,
            }" :search-options="{ enabled: true }" :line-numbers="true" styleClass="vgt-table" max-height="550px">
                <template slot="table-row" slot-scope="props">
                    <span v-if="props.column.field == 'before'">
                        <button class="btn btn-sm btn-outline-primary shadow-none" @click="editRow(props.row)">
                            Edit
                        </button>
                        <button class="btn btn-sm btn-outline-danger shadow-none" @click="deleteRow(props.row.id)">
                            Delete
                        </button>
                    </span>
                </template>
            </vue-good-table>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            columns: [
                { label: "NewsId", field: "id", },
                { label: "News Title", field: "title", },
                { label: "Category", field: "category_name", },
                { label: "Image", field: "img", html: true },
                { label: "Action", field: "before", },
            ],
            categorywiseadds: [],
            categorywiseadd: {
                id: "",
                title: "",
                url: "",
                image: ""
            },
            categories: [],
            selectedCategory: null,
            imageSrc: location.origin + "/noImage.jpg",
        };
    },

    created() {
        this.getCategory();
        this.getCategorywiseAdd();
    },

    methods: {
        getCategory() {
            axios.get(location.origin + "/admin/fetch-category")
                .then(res => {
                    this.categories = res.data.filter(c => c.is_menu != 'others');
                })
        },
        getCategorywiseAdd() {
            axios.get(location.origin + "/admin/get-category_wise_add").then((res) => {
                this.categorywiseadds = res.data.map(ad => {
                    ad.category_name = ad.category.name;
                    ad.img = ad.image == '' ? '' : `<img src="/${ad.image}" style="width:50px;border: 1px dashed gray;padding: 1px;" />`;
                    return ad;
                })
            });
        },

        saveCategorywiseAdd(event) {
            if (this.categorywiseadd.title == "") {
                alert("Title field is required");
                return;
            }
            if (this.selectedCategory == null) {
                alert("Category name required")
                return
            }

            if (this.categorywiseadd.image == '') {
                alert("Adds Image must be upload");
                return
            }

            let formdata = new FormData(event.target)
            formdata.append("image", this.categorywiseadd.image)
            formdata.append("id", this.categorywiseadd.id)
            formdata.append("category_id", this.selectedCategory.id)
            let url;
            if (this.categorywiseadd.id == '') {
                url = '/admin/category_wise_add';
            } else {
                url = '/admin/update/category_wise_add'
            }
            axios
                .post(url, formdata)
                .then((res) => {
                    $.notify(res.data.message, "success");
                    this.clearData();
                    this.getCategorywiseAdd();
                });
        },

        editRow(val) {
            this.categorywiseadd = {
                id: val.id,
                title: val.title,
                url: val.url
            };
            this.selectedCategory = {
                id: val.category_id,
                name: val.category_name
            }
            this.imageSrc = val.image != null ? '/' + val.image : location.origin + "/noImage.jpg"
        },
        deleteRow(id) {
            if (confirm("Are you sure want to delete this!")) {
                axios.post(location.origin + "/admin/category_wise_add/delete", { id: id }).then((res) => {
                    $.notify(res.data, "success");
                    this.getCategorywiseAdd();
                });
            }
        },

        imageUrl(event) {
            if (event.target.files[0]) {
                let img = new Image()
                img.src = window.URL.createObjectURL(event.target.files[0]);
                img.onload = () => {
                    if (img.width === 350 && img.height === 470) {
                        this.imageSrc = window.URL.createObjectURL(event.target.files[0]);
                        this.categorywiseadd.image = event.target.files[0];
                    } else {
                        alert(`This image ${img.width} X ${img.width} but require image 350px X 470px`);
                        event.target.value = '';
                    }
                }
            }
        },

        clearData() {
            this.categorywiseadd = {
                id: "",
                title: "",
                url: "",
                image: ""
            };
            this.selectedCategory = null
            this.imageSrc = location.origin + "/noImage.jpg"
        },
    },
};
</script>