<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form @submit.prevent="saveCategory">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="form-group mt-2">
                                    <label for="name">Category Name:</label>
                                    <input type="text" id="name" name="name" class="form-control shadow-none"
                                        v-model="category.name" placeholder="Category name" autocomplete="off" />
                                </div>
                                <div class="form-group mt-2">
                                    <label for="is_menu">Is Menu:</label>
                                    <select id="is_menu" name="is_menu" class="form-select shadow-none"
                                        v-model="category.is_menu" autocomplete="off">
                                        <option value="" selected>Select</option>
                                        <option value="true">True</option>
                                        <option value="false">False</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="position">Menu Position:</label>
                                    <input type="number" min="0" id="position" name="position" class="form-control shadow-none"
                                        v-model="category.position" placeholder="Menu position" autocomplete="off" />
                                </div>
                                <div class="form-group mt-4 text-end">
                                    <button type="reset" class="btn btn-danger">
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
            <vue-good-table :columns="columns" :rows="categories" :fixed-header="false" :pagination-options="{
                enabled: true,
                perPage: 10,
            }" :search-options="{ enabled: true }" :line-numbers="true" styleClass="vgt-table striped bordered"
                max-height="550px">
                <template slot="table-row" slot-scope="props">
                    <span v-if="props.column.field == 'img'">
                    </span>
                </template>
                <template slot="table-row" slot-scope="props">
                    <span v-if="props.column.field == 'after'">
                        <a href="" @click.prevent="editRow(props.row)">
                            <i class="fas fa-edit text-info"></i>
                        </a>
                        <a href="" @click.prevent="deleteRow(props.row.id)">
                            <i class="fas fa-trash text-danger"></i>
                        </a>
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
            category: {
                id: "",
                name: "",
                is_menu: "",
                position: "",
                image: "",
            },
            categories: [],
            imageSrc: location.origin + "/noImage.jpg",

            columns: [
                { label: 'Category name', field: 'name' },
                { label: 'Slug', field: 'slug' },
                { label: 'Is Menu', field: 'is_menu' },
                { label: 'Menu Position', field: 'position' },
                { label: "Image", field: "img", html: true, },
                { label: "Action", field: "after" },
            ],
            page: 1,
            per_page: 10,
        }
    },

    created() {
        this.getCategory();
    },

    methods: {
        async getCategory() {
            axios.get("/admin/fetch-category")
                .then(res => {
                    this.categories = res.data.map(c => {
                        c.img = c.image == '' ? '' : '<img src="/' + c.image + '" width="60px">'
                        return c;
                    })
                })

        },

        saveCategory(event) {
            if (this.category.name == '') {
                alert("Category name required");
                return
            }
            if (this.category.is_menu == '') {
                alert("Is Menu required");
                return
            }
            let formdata = new FormData(event.target)
            formdata.append("id", this.category.id)
            formdata.append("image", this.category.image)
            axios.post(location.origin + "/admin/category", formdata)
                .then(res => {
                    if (res.data.error) {
                        alert(res.data.error.name[0])
                    } else {
                        $.notify(res.data, "success");
                        this.clearData();
                        this.getCategory();
                    }
                })
        },

        editRow(val) {
            this.category = {
                id: val.id,
                name: val.name,
                is_menu: val.is_menu,
                position: val.position,
                image: val.image
            }
            this.imageSrc = val.image != null ? location.origin + "/" + val.image : location.origin + "/noImage.jpg"
        },

        deleteRow(id) {
            if (confirm("Are you sure want to delete this!")) {
                axios.post(location.origin + "/admin/category/delete", { id: id }).then((res) => {
                    $.notify(res.data, "success");
                    this.getCategory();
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
                        this.category.image = event.target.files[0];
                    } else {
                        alert(`This image ${img.width}px X ${img.height}px but require image 150px X 150px`);
                    }
                }
            }
        },

        clearData() {
            this.category = {
                id: "",
                name: "",
                is_menu: "",
                position: "",
                image: "",
            }
            this.imageSrc = location.origin + "/noImage.jpg"
        }
    },
}
</script>
