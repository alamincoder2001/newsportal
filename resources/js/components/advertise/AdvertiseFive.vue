<template>
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form @submit.prevent="updateAdvertise">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mt-2">
                                    <label for="title">Title:</label>
                                    <input type="text" id="title" name="title" class="form-control shadow-none"
                                        v-model="form.title" autocomplete="off" />
                                </div>
                                <div class="form-group mt-2">
                                    <label for="url">Url:</label>
                                    <input type="url" id="url" name="url" class="form-control shadow-none"
                                        v-model="form.url" autocomplete="off" />
                                </div>
                                <div class="form-group row mb-4">
                                    <div class="col-md-12">
                                        <img :src="imageSrc" class="imageShow" width="100%" height="200px"
                                            style="border:1px solid #d7d7d7;" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="image">Master Image:</label>
                                        <input type="file" name="image" id="image" class="form-control"
                                            @change="imageUrl" />
                                        <p style="font-size: 11px;color: red;">Required size: (1300px X 200px)</p>
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="status">Status:</label>
                                    <select name="status" id="status" v-model="form.status"
                                        class="form-control shadow-none">
                                        <option value="" selected>Select</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
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
            form: new Form({
                title: "",
                url: "",
                image: "",
                status: ""
            }),

            imageSrc: "/1300x200.jpg",
        }
    },

    created() {
        this.getAdvertise()
    },

    methods: {
        getAdvertise() {
            axios.get(location.origin + "/admin/get-advertise-five")
                .then(res => {
                    this.form = res.data
                    this.imageSrc = res.data.image != null ? "/" + res.data.image : "/1300x200.jpg"
                })
        },

        updateAdvertise(event) {
            if (this.form.title == '') {
                alert("Title name is required")
                return
            }
            if (this.form.url == '') {
                alert("URL Field is required")
                return
            }
            let formdata = new FormData(event.target)
            formdata.append("image", this.form.image)
            axios.post("/admin/advertise-five", formdata)
                .then(res => {
                    $.notify(res.data, "success");
                    this.getAdvertise();
                })
        },

        imageUrl(event) {
            if (event.target.files[0]) {
                let img = new Image()
                img.src = window.URL.createObjectURL(event.target.files[0]);
                img.onload = () => {
                    if (img.width === 1300 && img.height === 200) {
                        this.imageSrc = window.URL.createObjectURL(event.target.files[0]);
                        this.news.image = event.target.files[0];
                    } else {
                        alert(`This image ${img.width} X ${img.height} but require image 1300px X 200px`);
                        document.querySelector("[type='file']").value = ''
                    }
                }
            }
        },
    },
}
</script>
