<template>
    <div class="row">
        <div class="col-lg-12 col-12">
            <div class="card">
                <div class="card-body">
                    <form @submit.prevent="saveAd">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="form-group mt-2">
                                    <label for="name">Ad Title:</label>
                                    <input type="text" id="title" name="title" class="form-control shadow-none"
                                        v-model="ad.title" autocomplete="off" />
                                </div>
                                <div class="row mt-4">
                                    <label for="previous_due" class="col-5 col-lg-4 d-flex align-items-center"></label>
                                    <div class="col-7 col-lg-8 text-end">
                                        <button type="button" @click="clearData"
                                            class="btn btn-sm btn-outline-secondary shadow-none">
                                            Reset
                                        </button>
                                        <button type="submit" class="btn btn-sm btn-outline-success shadow-none">
                                            Save Banner
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

        <!-- list of Banner -->
        <div class="col-12 col-lg-12" style="overflow-x: auto">
            <vue-good-table :columns="columns" :rows="ads" :fixed-header="true" :pagination-options="{
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
    data(){
        return {

            columns: [
                {
                    label: "AdId",
                    field: "id",
                },
                {
                    label: "Ad Title",
                    field: "title",
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

            ads : [],

            ad : {
                id : '',
                title : '',
                image: '',
            },

            imageSrc: location.origin + "/noImage.jpg",
        }
    },

    created(){
        this.getAds();
    },

    methods :{

        getAds() {
            axios.get(location.origin + "/admin/fetch-ad")
                .then(res => {
                    this.ads = res.data
                })
        },


        saveAd(event){

            if(this.ad.title == ''){
                alert('Give the title');
                return;
            }

            let formdata = new FormData(event.target);

            formdata.append('id', this.ad.id);
            formdata.append('image', this.ad.image);
            axios.post(location.origin + "/admin/ad", formdata)
            .then( res => {
                if(res.data.error){
                   alert(res.data.error.name[0]);
                }else {
                    $.notify(res.data, "Success");
                    this.getAds();
                    this.clearData();
                }
            })
        },
        editRow(val) {
            this.ad = {
                id        : val.id,
                title      : val.title,
                image     : val.image
            }
            this.imageSrc = val.image != null ? location.origin + "/" + val.image : location.origin + "/noImage.jpg"
        },

        deleteRow(id) {
            if (confirm("Are you sure want to delete this!")) {
                axios.post(location.origin + "/admin/ad/delete", { id: id }).then((res) => {
                    $.notify(res.data, "success");
                    this.getAds();
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
                        this.ad.image = event.target.files[0];
                    } else {
                        alert(`This image ${img.width}px X ${img.height}px but require image 150px X 150px`);
                    }
                }
            }
        },

        clearData() {
            this.ad = {
                id: "",
                title: "",
                image: "",
            }
            this.imageSrc = location.origin + "/noImage.jpg"
        }
    }
}

</script>
