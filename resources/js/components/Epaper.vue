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
                                <div class="form-group row mb-4">
                                    <div class="col-md-12">
                                        <img :src="imageSrc" class="imageShow" width="300px" height="450px"
                                            style="border:1px solid #d7d7d7;" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="image">Master Image:</label>
                                        <input type="file" name="image" id="image" class="form-control"
                                            @change="imageUrl" />
                                        <p style="font-size: 11px;color: red;">Required size: width:300px X height:450px</p>
                                    </div>
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
                    <div style="text-align: center;font-size: 16px;" v-if="props.column.field == 'before'">
                        <a href="" title="edit" @click.prevent="editRow(props.row)">
                            <i class="fas fa-edit text-info"></i>
                        </a>
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
                { label: "Epaper Image", field: "img", html: true },
                { label: "Publish Date", field: "publish_date" },
                { label: "Link", field: "link" },
                { label: "Action", field: "before" },
            ],
            epapers: [],
            epaper: {
                id: "",
                link: "",
                publish_date: moment().format("YYYY-MM-DD"),
                image: ""
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
                this.epapers = res.data.map(n => {
                    n.img = n.image == null ? '' : '<img src="' + n.image + '" width="40px">';
                    return n;
                });;
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
            let url;
            if (this.epaper.id == '') {
                url = '/admin/epaper';
            } else {
                url = '/admin/update/epaper'
            }
            axios
                .post(url, formdata)
                .then((res) => {
                    if (res.data.status) {
                        $.notify(res.data.message, "success");
                        this.clearData();
                        this.getEpaper();
                    }
                });
        },

        editRow(val) {
            this.epaper = {
                id: val.id,
                link: val.link,
                publish_date: val.publish_date,
                image: val.image
            };
            this.imageSrc = val.image != null ? location.origin + val.image : location.origin + "/noImage.jpg"
        },
        deleteRow(id) {
            if (confirm("Are you sure want to delete this!")) {
                axios.post(location.origin + "/admin/epaper/delete", { id: id }).then((res) => {
                    $.notify(res.data, "success");
                    this.getEpaper();
                });
            }
        },

        imageUrl(event) {
            this.imageSrc = window.URL.createObjectURL(event.target.files[0]);
            this.epaper.image = event.target.files[0];
        },

        clearData() {
            this.epaper = {
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