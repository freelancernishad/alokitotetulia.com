<template>
    <div>
        <loader v-if="preloader"  object="#ff0000" color1="#ffffff" color2="#17fd3d" size="8" speed="2" bg="#343a40" objectbg="#999793" opacity="80" disableScrolling="false" name="dots"></loader>

<div class="breadcrumbs-area">
    <h3>নতুন পোস্ট</h3>
    <ul>
        <li>
            <router-link :to="{name:'Dashboard'}">Home</router-link>
        </li>
        <li>নতুন পোস্ট</li>
    </ul>
</div>

   <form @submit.stop.prevent="onSubmit" class="form-horizontal">


                            <div class="row">













                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>শিরোনাম</label>
                                        <input type="text" class="form-control" v-model="form.title" id="title" value="" required>
                                    </div>

                                </div>



                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>প্রতিবেদকের নাম</label>
                                        <input type="text" class="form-control" v-model="form.author" id="title" value="" required>
                                    </div>

                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>মূল ক্যাটাগরি নির্বাচন করুন</label>



                                        <select v-model="form.cat_id" id="category" class="form-control" @change="checkCat" required>
                                            <option value="">Select</option>
                                                <option v-for="cat in categorys" :key="cat.id" :value="cat.id">{{ cat.name }}</option>
                                        </select>




                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>অন্যান্য ক্যাটাগরি নির্বাচন করুন</label>

                                        <multiselect v-model="form.cat_ids" tag-placeholder="Add this as new tag" placeholder="Search or add a tag" label="catname" track-by="catid" :options="options" :multiple="true" ></multiselect>


                                    </div>

                                </div>


                                <div class="col-md-12" v-if="getcatdata.name=='ভিডিও গ্যালারি'">
                                    <div class="form-group">
                                        <label>Video</label>
                                        <input type="text" class="form-control" v-model="form.video" id="short_description" value="" required>
                                    </div>
                                </div>



                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>সংক্ষিপ্ত শিরোনাম</label>
                                        <input type="text" class="form-control" v-model="form.short_description" id="short_description" value="" required>
                                    </div>

                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>বিস্তারিত সংবাদ</label>

                                        <vue-editor v-model="form.long_description" required/>

                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label col-form-label">ছবি
                                        </label>

                                            <input type="file" class="form-control" id="Images"  @change="FileSelected($event, 'Images')"  />
                                            <label for="Images">
                                            <img thumbnail fluid :src="form.Images" width="300px" alt="Image 3"/>
                                            </label>
                                    </div>
                                </div>





                            </div>











                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">

                                    <button type="submit" class="btn btn-success" style="font-size: 25px;">পোস্ট করুন</button>
                                </div>
                            </div>



  </form>


    </div>
</template>

<script>
export default {
    data(){
        return {
            preloader:false,
           form: {
                title:null,
                author:'Admin',
                cat_id:null,
                cat_ids:[{}],
                short_description:null,
                long_description:null,
                Images:null,
             },
             categorys:{},
             getcatdata:{},

            options: []
        }
    },
    methods:{



		FileSelected($event, parent_index){



			let file = $event.target.files[0];
			if (file.size > 5048576) {
				Notification.image_validation();
			} else {
				let reader = new FileReader;
				reader.onload = event => {
					this.form[parent_index] = event.target.result
					// console.log(event.target.result);
				};
				reader.readAsDataURL(file)
			}
                    //   console.log($event.target.result);
		},



      async getCategory(){

        var res = await this.callApi('get',`/api/get/category/list?type=all`,[]);
        this.categorys = res.data
        res.data.forEach(cat => {
            // console.log(cat.id ,cat.name)
            this.options.push( { catid: cat.id, catname: cat.name });
        });


        },

      async checkCat(){

        var res = await this.callApi('get',`/api/get/category/list?singleid=${this.form.cat_id}`,[]);
        this.getcatdata = res.data


        },

       getunionInfo(id=''){

                axios.get(`/api/update/blog/${id}`)
                .then((res)=>{

                    this.form = res.data
                })

        },


        async onSubmit() {
            this.preloader = true
            var res = await this.callApi('post', '/api/update/blog', this.form);

    // conseole.log(res)
    this.getunionInfo();
    this.$router.push({ name: 'blogs'})
    Notification.customSuccess('Blog Update Successfuly Done');
    this.preloader = false

        }
    },
    mounted(){
        if(this.$route.params.id){

           this.getunionInfo(this.$route.params.id);
        }
        this.getCategory();
        }
}
</script>
