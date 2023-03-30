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
                    label: "News Title",
                    field: "title",
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
            imageSrc: location.origin + "/noImage.jpg",
        };
    },

    created() {
        this.getNews();
    },

    methods: {
        getNews() {
            axios.get(location.origin + "/admin/fetch-news").then((res) => {
                this.newss = res.data;
            });
        },

        saveNews(event) {
            if (this.news.title == "") {
                alert("Title Field is Empty");
                return;
            }

            let formdata = new FormData(event.target)
            formdata.append("image", this.news.image)
            formdata.append("id", this.news.id)
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
                date: val.date,
                description: val.description
            };
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
                    if (img.width === 1024 && img.height === 400) {
                        this.imageSrc = window.URL.createObjectURL(event.target.files[0]);
                        this.news.image = event.target.files[0];
                    } else {
                        alert(`This image ${img.width} X ${img.width} but require image 1024 X 400`);
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
            this.getNews()
            this.imageSrc = location.origin + "/noImage.jpg"
        },
    },
};
</script>