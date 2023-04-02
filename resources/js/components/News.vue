<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form @submit.prevent="saveNews">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="form-group mt-2">
                                    <label for="title">Title:</label>
                                    <input type="text" name="title" v-model="news.title" id="title"
                                        class="form-control shadow-none">
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-6">
                                        <div class="form-group mt-2">
                                            <label for="category">Category:</label>
                                            <v-select :options="categories" name="category_id" id="category"
                                            v-model="selectedCategory" label="name" @input="onChangeCategory"></v-select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mt-2">
                                            <label for="subcategory">Subcategory:</label>
                                            <v-select :options="subcategories" name="subcategory_id" id="subcategory"
                                            v-model="selectedSubcategory" label="name"></v-select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <ckeditor :editor="editor" v-model="news.description"></ckeditor>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 col-lg-12 text-end">
                                        <button type="button" @click="clearData"
                                            class="btn btn-sm btn-outline-secondary shadow-none">
                                            Reset
                                        </button>
                                        <button type="submit" class="btn btn-sm btn-outline-success shadow-none">
                                            Save News
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-2 d-flex justify-content-center align-items-center">
                                <div class="form-group ImageBackground">
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
            <vue-good-table :columns="columns" :rows="newss" :fixed-header="true" :pagination-options="{
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
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
export default {
    data() {
        return {
            editor: ClassicEditor,
            columns: [
                {
                    label: "NewsId",
                    field: "id",
                },
                {
                    label: "News Title",
                    field: "title",
                },
                {
                    label: "Category",
                    field: "category_name",
                },
                {
                    label: "Addedby",
                    field: "admin_name",
                },
                {
                    label: "Action",
                    field: "before",
                },
            ],
            newss: [],
            news: {
                id: "",
                title: "",
                description: "",
                image: ""
            },
            categories: [],
            selectedCategory: null,
            subcategories: [],
            selectedSubcategory: null,
            imageSrc: location.origin + "/noImage.jpg",
        };
    },

    created() {
        this.getCategory();
        this.getNews();
    },

    methods: {
        getCategory() {
            axios.get(location.origin + "/admin/fetch-category")
                .then(res => {
                    this.categories = res.data
                })
        },
        getSubcategory() {
            axios.get(location.origin + "/admin/fetch-subcategory")
                .then(res => {
                    this.subcategories = res.data.filter(sub => sub.category_id == this.selectedCategory.id)
                })
        },
        getNews() {
            axios.get(location.origin + "/admin/fetch-news").then((res) => {
                this.newss = res.data;
            });
        },

        onChangeCategory(){
            if (this.selectedCategory == null) {
                return
            }
            this.selectedSubcategory = null
            this.getSubcategory()
        },

        saveNews(event) {
            if (this.news.title == "") {
                alert("Title Field is Empty");
                return;
            }
            if (this.selectedCategory == null) {
                alert("Category name required")
                return
            }
            if (this.news.description == "") {
                alert("Description name required")
                return
            }

            let formdata = new FormData(event.target)
            formdata.append("image", this.news.image)
            formdata.append("id", this.news.id)
            formdata.append("category_id", this.selectedCategory.id)
            formdata.append("subcategory_id", this.subcategories.length > 0 ? this.selectedSubcategory != null ? this.selectedSubcategory.id : 0 : 0)
            formdata.append("description", this.news.description != null ? this.news.description : "")
            axios
                .post(location.origin + "/admin/news", formdata)
                .then((res) => {
                    $.notify(res.data, "success");
                    this.clearData();
                    this.getNews();
                });
        },

        editRow(val) {
            this.news = {
                id: val.id,
                title: val.title,
                description: val.description
            };
            this.selectedCategory = {
                id: val.category_id,
                name: val.category_name
            }
            if (val.subcategory_id != null) {
                this.selectedSubcategory = {
                    id: val.subcategory_id,
                    name: val.subcategory_name
                }
            }
            this.imageSrc = val.image != null ? location.origin + "/" + val.image : location.origin + "/noImage.jpg"
        },
        deleteRow(id) {
            if (confirm("Are you sure want to delete this!")) {
                axios.post(location.origin + "/admin/news/delete", { id: id }).then((res) => {
                    $.notify(res.data, "success");
                    this.getNews();
                });
            }
        },

        imageUrl(event) {
            if (event.target.files[0]) {
                let img = new Image()
                img.src = window.URL.createObjectURL(event.target.files[0]);
                img.onload = () => {
                    if (img.width === 966 && img.height === 648) {
                        this.imageSrc = window.URL.createObjectURL(event.target.files[0]);
                        this.news.image = event.target.files[0];
                    } else {
                        alert(`This image ${img.width} X ${img.width} but require image 966px X 648px`);
                    }
                }
            }
        },

        clearData() {
            this.news = {
                id: "",
                title: "",
                description: "",
            };
            this.selectedCategory = null
            this.selectedSubcategory = null
            this.imageSrc = location.origin + "/noImage.jpg"
        },
    },
};
</script>