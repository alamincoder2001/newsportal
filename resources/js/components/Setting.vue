<template>
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form @submit.prevent="updateSetting">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="form-group mt-2">
                                    <label for="company_name">Company Name:</label>
                                    <input type="text" id="company_name" name="company_name"
                                        class="form-control shadow-none" v-model="setting.company_name"
                                        autocomplete="off" />
                                </div>
                                <div class="form-group mt-2">
                                    <label for="title">SubTitle:</label>
                                    <input type="text" id="title" name="title" class="form-control shadow-none"
                                        v-model="setting.title" autocomplete="off" />
                                </div>
                                <div class="form-group mt-2">
                                    <label for="address">Address:</label>
                                    <textarea id="address" name="address" class="form-control shadow-none"
                                        v-model="setting.address" autocomplete="off"></textarea>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-6">
                                        <div class="form-group mt-2">
                                            <label for="phone">Phone:</label>
                                            <input type="text" id="phone" name="phone" class="form-control shadow-none"
                                                v-model="setting.phone" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mt-2">
                                            <label for="youtube">Youtube Url:</label>
                                            <input type="url" id="youtube" name="youtube" class="form-control shadow-none"
                                                v-model="setting.youtube" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mt-2">
                                            <label for="facebook">Facebook Url:</label>
                                            <input type="url" id="facebook" name="facebook" class="form-control shadow-none"
                                                v-model="setting.facebook" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mt-2">
                                            <label for="instagram">Instagram Url:</label>
                                            <input type="url" id="instagram" name="instagram"
                                                class="form-control shadow-none" v-model="setting.instagram"
                                                autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mt-2">
                                            <label for="twitter">Twitter Url:</label>
                                            <input type="url" id="twitter" name="twitter" class="form-control shadow-none"
                                                v-model="setting.twitter" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mt-2">
                                            <label for="linkedin">Linkedin Url:</label>
                                            <input type="url" id="linkedin" name="linkedin" class="form-control shadow-none"
                                                v-model="setting.linkedin" autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-5 col-lg-4 d-flex align-items-center"></label>
                                    <div class="col-7 col-lg-8 text-end">
                                        <button type="submit" class="btn btn-sm btn-outline-success shadow-none">
                                            Update Setting
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-2 d-flex justify-content-center align-items-center">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group ImageBackground">
                                            <img :src="imageSrc" class="imageShow" />
                                            <label for="logo">Logo</label>
                                            <input type="file" id="logo" class="form-control shadow-none"
                                                @change="imageUrl" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group ImageBackground">
                                            <img :src="imageSrc1" class="imageShow" />
                                            <label for="favicon">Favicon</label>
                                            <input type="file" id="favicon" class="form-control shadow-none"
                                                @change="imageUrl1" />
                                        </div>
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
            setting: {
                company_name: "",
                title: "",
                address: "",
                phone: "",
                facebook: "",
                instagram: "",
                twitter: "",
                linkedin: "",
                youtube: "",
                favicon: "",
                logo: ""
            },

            imageSrc: location.origin + "/noImage.jpg",
            imageSrc1: location.origin + "/noImage.jpg",
        }
    },

    created(){
        this.getSetting()
    },

    methods: {
        getSetting(){
            axios.get(location.origin+"/admin/settings-fetch")
                .then(res => {
                    this.setting = res.data
                    this.imageSrc = res.data.logo != null ? location.origin + "/" + res.data.logo : location.origin + "/noImage.jpg"
                    this.imageSrc1 = res.data.favicon != null ? location.origin + "/" + res.data.favicon : location.origin + "/noImage.jpg"
                })
        },

        updateSetting(event) {
            if (this.setting.company_name == '') {
                alert("Company name required")
                return
            }
            if (this.setting.title == '') {
                alert("Title name required")
                return
            }
            if (this.setting.phone == '') {
                alert("Title name required")
                return
            }
            let formdata = new FormData(event.target)
            formdata.append("logo", this.setting.logo)
            formdata.append("favicon", this.setting.favicon)
            axios.post(location.origin + "/admin/settings", formdata)
                .then(res => {
                    if (res.data.error) {
                        alert(res.data.error.company_name[0])
                    }else{
                        $.notify(res.data, "success");
                        this.getSetting();
                    }
                })
        },

        imageUrl(event) {
            if (event.target.files[0]) {
                let img = new Image()
                img.src = window.URL.createObjectURL(event.target.files[0]);
                img.onload = () => {
                    if (img.width === 552 && img.height === 287) {
                        this.imageSrc = window.URL.createObjectURL(event.target.files[0]);
                        this.setting.logo = event.target.files[0];
                    } else {
                        alert(`This image ${img.width}px X ${img.height}px but require image 230px X 50px`);
                    }
                }
            }
        },
        imageUrl1(event) {
            if (event.target.files[0]) {
                let img = new Image()
                img.src = window.URL.createObjectURL(event.target.files[0]);
                img.onload = () => {
                    if (img.width === 552 && img.height === 287) {
                        this.imageSrc1 = window.URL.createObjectURL(event.target.files[0]);
                        this.setting.favicon = event.target.files[0];
                    } else {
                        alert(`This image ${img.width}px X ${img.height}px but require image 150px X 150px`);
                    }
                }
            }
        },
    },
}
</script>
