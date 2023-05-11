<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form @submit.prevent="saveEpaper">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="form-group mt-2">
                                    <label for="link">Link:</label>
                                    <input type="url" name="link" v-model="epaper.link" id="link"
                                        class="form-control shadow-none">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="publish_date">Publish Date:</label>
                                    <input type="date" name="publish_date" v-model="epaper.publish_date" id="publish_date"
                                        class="form-control shadow-none">
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 col-lg-12 text-end">
                                        <button type="button" @click="clearData"
                                            class="btn btn-sm btn-outline-secondary shadow-none">
                                            Reset
                                        </button>
                                        <button type="submit" class="btn btn-sm btn-outline-success shadow-none">
                                            Save Epaper
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
        <div class="col-md-12" style="overflow-x: auto">
            <vue-good-table :columns="columns" :rows="epapers" :fixed-header="false" :pagination-options="{
                enabled: true,
                perPage: 10,
            }" :search-options="{ enabled: true }" :line-numbers="true"
                styleClass="vgt-table striped bordered news_table" max-height="550px">
                <template slot="table-row" slot-scope="props">
                    <span v-if="props.column.field == 'img'">
                    </span>
                </template>
                <template slot="table-row" slot-scope="props">
                    <div style="text-align: center;font-size: 16px;" v-if="props.column.field == 'after'">
                        <a href="" title="archive" @click.prevent="archiveRow(props.row.id)">
                            <i class="fa fa-file-archive-o text-bg-warning" aria-hidden="true"></i>
                        </a> <br>
                        <a href="" title="edit" @click.prevent="editRow(props.row)">
                            <i class="fas fa-edit text-info"></i>
                        </a><br>
                        <a href="" title="delete" @click.prevent="deleteRow(props.row.id)">
                            <i class="fas fa-trash text-danger"></i>
                        </a>
                    </div>
                </template>
            </vue-good-table>
        </div>
    </div>
</template>

<script>
var moment = require('moment');
export default {
    data() {
        return {
            columns: [
                {
                    label: "EpaperId",
                    field: "id",
                },
                {
                    label: "Link",
                    field: "link",
                },
                {
                    label: "Action",
                    field: "before",
                },
            ],
            epapers: [],
            epaper: {
                id          : "",
                link        : "",
                publish_date: moment().format("YYYY-MM-DD"),
                image       : ""
            },
            imageSrc: location.origin + "/noImage.jpg",
        };
    },

    created() {
        this.getEpaper();
    },

    methods: {
        getEpaper() {
            axios.get("/admin/get-epaper").then((res) => {
                this.epapers = res.data;
            });
        },

        saveEpaper(event) {
            if (this.epaper.link == "") {
                alert("Link field is required");
                return;
            }
            if (this.epaper.date == "") {
                alert("Date field required")
                return
            }

            let formdata = new FormData(event.target)
            formdata.append("image", this.epaper.image)
            formdata.append("id", this.epaper.id)
            axios
                .post(location.origin + "/admin/epaper", formdata)
                .then((res) => {
                    $.notify(res.data, "success");
                    this.clearData();
                    this.getEpaper();
                });
        },

        editRow(val) {
            this.news = {
                id: val.id,
                title: val.title,
                subtitle: val.subtitle,
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
                    this.getEpaper();
                });
            }
        },

        imageUrl(event) {
            if (event.target.files[0]) {
                let img = new Image()
                img.src = window.URL.createObjectURL(event.target.files[0]);
                img.onload = () => {
                    if (img.width === 740 && img.height === 450) {
                        this.imageSrc = window.URL.createObjectURL(event.target.files[0]);
                        this.news.image = event.target.files[0];
                    } else {
                        alert(`This image ${img.width} X ${img.width} but require image 740px X 450px`);
                    }
                }
            }
        },

        clearData() {
            this.news = {
                id: "",
                link: "",
                publish_date: moment().format("YYYY-MM-DD"),
                image: ""
            };
            this.imageSrc = location.origin + "/noImage.jpg"
        },
    },
};
</script>