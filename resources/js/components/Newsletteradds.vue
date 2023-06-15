<template>
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form @submit.prevent="updateAdvertise">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group row mb-4">
                                    <div class="col-md-12">
                                        <img :src="imageSrc" class="imageShow" width="400px" height="200px"
                                            style="border:1px solid #d7d7d7;" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="image">Master Image:</label>
                                        <input type="file" name="image" id="image" class="form-control"
                                            @change="imageUrl" />
                                        <p style="font-size: 11px;color: red;">Required size: 600 X 300</p>
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="status">Status:</label>
                                    <select name="status" id="status" v-model="advertise.status"
                                        class="form-control shadow-none">
                                        <option value="" selected>Select</option>
                                        <option value="a">Active</option>
                                        <option value="p">Inactive</option>
                                    </select>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-5 col-lg-4 d-flex align-items-center"></label>
                                    <div class="col-7 col-lg-8 text-end">
                                        <button type="submit" class="btn btn-sm btn-outline-success shadow-none">
                                            Update Advertise
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            advertise: {
                image: "",
                status: ""
            },
            imageSrc: location.origin + "/600x300.jpg",
        }
    },

    created() {
        this.getAdvertise()
    },

    methods: {
        getAdvertise() {
            axios.get(location.origin + "/admin/get-newsletteradds")
                .then(res => {
                    this.advertise = res.data
                    this.imageSrc = res.data.image != null ? location.origin + "/" + res.data.image : location.origin + "/600x300.jpg"
                })
        },

        updateAdvertise(event) {
            let formdata = new FormData(event.target)
            formdata.append("image", this.advertise.image)
            axios.post("/admin/newsletteradds", formdata)
                .then(res => {
                    $.notify(res.data, "success");
                    this.getAdvertise();
                })
        },

        imageUrl(event) {
            this.imageSrc = window.URL.createObjectURL(event.target.files[0]);
            this.advertise.image = event.target.files[0];
        }
    },
}
</script>
