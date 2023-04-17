<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form @submit.prevent="saveSubcategory">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="form-group mt-2">
                                    <label for="name">Category Name:</label>
                                    <v-select :options="categories" name="category_id" id="category"
                                        v-model="selectedCategory" label="name"></v-select>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="name">Subcategory Name:</label>
                                    <input type="text" id="name" name="name" class="form-control shadow-none"
                                        v-model="subcategory.name" autocomplete="off" />
                                </div>
                                <div class="form-group mt-4 text-end">
                                    <button type="button" @click="clearData" class="btn btn-danger">
                                        Reset
                                    </button>
                                    <button type="submit" class="btn btn-success text-light">
                                        <i class="fa fa-floppy-o pe-1" aria-hidden="true"></i>
                                        Save
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center align-items-center">
                                <div class="form-group ImageBackground">
                                    <img :src="imageSrc" class="imageShow" />
                                    <p style="text-align: center;font-size: 11px;margin: 0px;">150px X 150px</p>
                                    <label for="image">Image</label>
                                    <input type="file" id="image" class="form-control shadow-none" @change="imageUrl" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <!-- list of category -->
        <div class="col-md-12" style="overflow-x: auto">
            <vue-good-table :columns="columns" :rows="subcategories" :fixed-header="true" :pagination-options="{
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
                {
                    label: "SubcategoryId",
                    field: "id",
                },
                {
                    label: "Subcategory Name",
                    field: "name",
                },
                {
                    label: "CategoryName",
                    field: "category_name",
                },
                {
                    label: "Slug",
                    field: "slug",
                },
                {
                    label: "Action",
                    field: "before",
                },
            ],
            subcategories: [],
            subcategory: {
                id: "",
                category_id: "",
                name: "",
                image: "",
            },
            categories: [],
            selectedCategory: {
                id: '',
                name: 'Select Category',
            },

            imageSrc: location.origin + "/noImage.jpg",
        }
    },

    created() {
        this.getCategory();
        this.getSubcategory();
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
                    this.subcategories = res.data
                })
        },

        saveSubcategory(event) {
            if (this.subcategory.name == '') {
                alert("Subcategory name required");
                return
            }
            if (this.selectedCategory == null || this.selectedCategory.id == '') {
                alert("Category name required");
                return
            }
            this.subcategory.category_id = this.selectedCategory.id
            let formdata = new FormData(event.target)
            formdata.append("id", this.subcategory.id)
            formdata.append("category_id", this.subcategory.category_id)
            formdata.append("image", this.subcategory.image)
            axios.post(location.origin + "/admin/subcategory", formdata)
                .then(res => {
                    if (res.data.error) {
                        alert(res.data.error.name[0])
                    } else {
                        $.notify(res.data, "success");
                        this.clearData();
                        this.getSubcategory();
                    }
                })
        },

        editRow(val) {
            this.subcategory = {
                id: val.id,
                category_id: val.category_id,
                name: val.name,
                image: val.image
            }
            this.selectedCategory = {
                id: val.category_id,
                name: val.category_name
            }
            this.imageSrc = val.image != null ? location.origin + "/" + val.image : location.origin + "/noImage.jpg"
        },

        deleteRow(id) {
            if (confirm("Are you sure want to delete this!")) {
                axios.post(location.origin + "/admin/subcategory/delete", { id: id }).then((res) => {
                    $.notify(res.data, "success");
                    this.getSubcategory();
                });
            }
        },

        imageUrl(event) {
            if (event.target.files[0]) {
                let img = new Image()
                img.src = window.URL.createObjectURL(event.target.files[0]);
                img.onload = () => {
                    if (img.width === 150 && img.height === 150) {
                        this.imageSrc = window.URL.createObjectURL(event.target.files[0]);
                        this.subcategory.image = event.target.files[0];
                    } else {
                        alert(`This image ${img.width}px X ${img.height}px but require image 150px X 150px`);
                    }
                }
            }
        },

        clearData() {
            this.subcategory = {
                id: "",
                category_id: "",
                name: "",
                image: "",
            }
            this.selectedCategory = null
            this.imageSrc = location.origin + "/noImage.jpg"
        }
    },
}
</script>
