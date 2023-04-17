<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form @submit.prevent="saveNews">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mt-2">
                                    <label for="title">Title:</label>
                                    <input type="text" name="title" v-model="form.title" id="title"
                                        class="form-control shadow-none">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="subtitle">Sub Title:</label>
                                    <input type="text" name="subtitle" v-model="form.subtitle" id="subtitle"
                                        class="form-control shadow-none">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="subtitle">Published Section:</label>
                                    <div class="published_section">
                                        <label v-for="(category, sl) in categories" :key="sl" class="col-md-3">
                                            <input class="form-check-input me-1" v-model="sCategory" type="checkbox"
                                                :value="category.id">
                                            {{ category.name }}
                                        </label>
                                    </div>
                                </div>
                                <!-- <div class="form-group mt-2">
                                    <label for="subcategory">Subcategory:</label>
                                    <v-select :options="subcategories" name="subcategory_id" id="subcategory"
                                        v-model="selectedSubcategory" label="name"></v-select>
                                </div> -->
                                <!-- <div class="row mt-2">
                                    <div class="col-md-6">
                                        <div class="form-group mt-2">
                                            <label for="category">Category:</label>
                                            <v-select :options="categories" class="" name="category_id" id="category"
                                                v-model="selectedCategory" label="name"
                                                @input="onChangeCategory"></v-select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mt-2">
                                            <label for="subcategory">Subcategory:</label>
                                            <v-select :options="subcategories" name="subcategory_id" id="subcategory"
                                                v-model="selectedSubcategory" label="name"></v-select>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="form-group">
                                    <ckeditor :editor="editor" v-model="form.description" row="10"></ckeditor>
                                </div>

                                <div class="form-group row mb-4">
                                    <div class="col-md-6">
                                        <label for="subcategory">Master Image:</label>
                                        <input type="file" id="image" class="form-control" @change="imageUrl" />
                                        <p style="font-size: 11px;color: red;">Required size: 966 X 648</p>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <img :src="imageSrc" class="imageShow" width="150px" height="101px" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="subcategory">Other Images 1:</label>
                                        <input type="file" id="image" class="form-control" @change="Image1" />
                                    </div>
                                    <div class="col-md-4">
                                        <label for="subcategory">Other Images 2:</label>
                                        <input type="file" id="image" class="form-control" @change="Image2" />
                                    </div>
                                    <div class="col-md-4">
                                        <label for="subcategory">Other Images 3:</label>
                                        <input type="file" id="image" class="form-control" @change="Image3" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="subcategory">Other Images 4:</label>
                                        <input type="file" id="image" class="form-control" @change="Image4" />
                                    </div>
                                    <div class="col-md-4">
                                        <label for="subcategory">Other Images 5:</label>
                                        <input type="file" id="image" class="form-control" @change="Image5" />
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 col-md-12 text-end">
                                        <button type="button" @click="clearData" class="btn btn-danger">
                                            Reset
                                        </button>
                                        <button type="submit" class="btn btn-success text-light">
                                            Save News
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-12 col-md-2 d-flex justify-content-center align-items-center">
                                <div class="form-group ImageBackground">
                                    <img :src="imageSrc" class="imageShow" />
                                    <label for="image">Image</label>
                                    <input type="file" id="image" class="form-control shadow-none" @change="imageUrl" />
                                </div>
                            </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
export default {
    // props: { id: String },
    data() {
        return {
            form: new Form({
                id: "",
                title: "",
                subtitle: "",
                description: "",
            }),
            props: [
                'id'
            ],
            sCategory: [],
            // news: {
            //     id: "",
            //     title: "",
            //     subtitle: "",
            //     category_id: "",
            //     subcategory_id: "",
            //     description: "",
            // },
            image: "",
            otherImage1: '',
            otherImage2: '',
            otherImage3: '',
            otherImage4: '',
            otherImage5: '',
            newses: [],
            categories: [],
            selectedCategory: {
                id: '',
                name: 'Select Category'
            },
            subcategories: [],
            selectedSubcategory: {
                id: '',
                name: 'Select Sub Category'
            },
            imageSrc: location.origin + "/noImage.jpg",

            editor: ClassicEditor,
        };
    },

    created() {
        this.getCategory();
        if (this.$attrs.id != '') {
            this.editNews(this.$attrs.id);

        }
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
        editNews(id) {
            axios.get("/admin/get-news/" + id).then(res => {
                let data = res.data;

                this.form.id = data.id;
                this.form.title = data.title;
                this.form.subtitle = data.subtitle;
                // this.form.category_id = data.category_id;
                // this.form.subcategory_id = data.subcategory_id;
                this.form.description = data.description;
                this.form.title = data.title;

                this.sCategory = data.category.map(c => c.category_id)

                // this.selectedCategory = {
                //     id: data.category_id,
                //     name: data.category_name
                // }
                // this.selectedSubcategory = {
                //     id: data.subcategory_id,
                //     name: data.subcategory_name
                // }

                this.imageSrc = data.image != null ? location.origin + data.image : location.origin + "/noImage.jpg"
            });
        },

        onChangeCategory() {
            if (this.selectedCategory == null) {
                return
            }
            // this.selectedSubcategory = null
            this.getSubcategory()
        },

        saveNews() {
            // if (this.news.title == "") {
            //     alert("Title field is required");
            //     return;
            // }
            // if (this.selectedCategory == null) {
            //     alert("Category name required")
            //     return
            // }
            // if (this.news.description == "") {
            //     alert("Description field required")
            //     return
            // }

            this.form.categories = this.sCategory;
            // this.form.subcategory_id = this.selectedSubcategory.id;

            // let fd = new FormData()
            // fd.append("data", this.news)
            // fd.append("image", this.image)
            // fd.append("otherImage1", this.otherImage1)
            // fd.append("otherImage2", this.otherImage2)
            // fd.append("otherImage3", this.otherImage3)
            // fd.append("otherImage4", this.otherImage4)
            // fd.append("otherImage5", this.otherImage5)
            // formdata.append("id", this.news.id)
            // formdata.append("category_id", this.selectedCategory.id)
            // formdata.append("subcategory_id", this.subcategories.length > 0 ? this.selectedSubcategory != null ? this.selectedSubcategory.id : 0 : 0)
            // fd.append("description", this.news.description != null ? this.news.description : "")

            let url = "/admin/news";
            if (this.form.id != '') {
                url = "/admin/update/news";
            }

            // console.log(this.form);
            // return
            this.form.post(url).then(res => {
                if (res.data.status == "error") {
                    this.showError(res.data.message);
                }
                $.notify(res.data.message, "success");

                if (res.data.status && url == "/admin/news") {
                    this.clearData();
                } else if (res.data.status && url == "/admin/update/news") {
                    window.open('/admin/manage-news/', "_self");
                }
                // this.getNews();
            });
        },

        showError(error) {
            if (error.title) {
                $('#title').addClass('is-invalid');
            } else {
                $('#title').removeClass('is-invalid');
            }
            // if (error.user_name) {
            //     toastr.error(error.user_name);
            //     $('#subtitle').addClass('is-invalid');
            // } else {
            //     $('#subtitle').removeClass('is-invalid');
            // }
            if (error.category_id) {
                $('#category').addClass('is-invalid');
            } else {
                $('#category').removeClass('is-invalid');
            }

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
                // img.onload = () => {
                //     if (img.width === 740 && img.height === 450) {
                this.imageSrc = window.URL.createObjectURL(event.target.files[0]);
                this.form.masterImage = event.target.files[0];
                //     } else {
                //         alert(`This image ${img.width} X ${img.width} but require image 740px X 450px`);
                //     }
                // }
            }
        },
        Image1(e) {
            this.form.otherImage1 = e.target.files[0];
        },
        Image2(e) {
            this.form.otherImage2 = e.target.files[0];
        },
        Image3(e) {
            this.form.otherImage3 = e.target.files[0];
        },
        Image4(e) {
            this.form.otherImage4 = e.target.files[0];
        },
        Image5(e) {
            this.form.otherImage5 = e.target.files[0];
        },

        clearData() {
            this.form.id = "";
            this.form.title = "";
            this.form.subtitle = "";
            // this.form.category_id = "";
            // this.form.subcategory_id = "";
            this.form.description = "";

            // this.sCategory = [];

            // this.selectedCategory = {
            //     id: '',
            //     name: 'Select Category'
            // }
            // this.selectedSubcategory = {
            //     id: '',
            //     name: 'Select Sub Category'
            // }

            this.image = ""
            this.otherImage1 = ''
            this.otherImage2 = ''
            this.otherImage3 = ''
            this.otherImage4 = ''
            this.otherImage5 = ''

            this.imageSrc = location.origin + "/noImage.jpg"
            document.getElementById("image").value = "";
        },
    },
};
</script>
