<template>
    <div>
        <div class="col-sm-6" v-if="show">
            <div class="alert alert-success" role="alert">
                Your Message has been received, We will get back to you shortly. Thanks
            </div>
        </div>
        <div class="col-sm-6" v-if="!show">
            <form class="wow fadeIn" data-wow-duration="2s" data-wow-delay="3s" id="contact-form"  role="form" @submit.prevent="sendMail">
                <div class="messages"></div>
                <div class="controls">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group" v-bind:class="{'has-error': errors.name}">
                                <label for="name" class="control-label">Name *</label>
                                <input id="name" type="text" name="name" class="form-control" placeholder="Please enter your name *" v-model="name" >

                                <span class="help-block" v-if="errors.name">
                                {{ errors.name[0]}}
                            </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" v-bind:class="{'has-error': errors.company}">
                                <label for="company" class="control-label">Company *</label>
                                <input id="company" type="text" name="company" class="form-control" placeholder="Please enter your company name *" v-model="company">

                                <span class="help-block" v-if="errors.company">
                                {{ errors.company[0]}}
                            </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" v-bind:class="{'has-error': errors.email}">
                                <label for="email" class="control-label">Email *</label>
                                <input id="email" type="email" name="email" class="form-control" placeholder="Please enter your email *" v-model="email">

                                <span class="help-block" v-if="errors.email">
                                {{ errors.email[0]}}
                            </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" v-bind:class="{'has-error': errors.phone}">
                                <label for="phone" class="control-label">Phone *</label>
                                <input id="phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone" v-model="phone">

                                <span class="help-block" v-if="errors.phone">
                                {{ errors.phone[0]}}
                            </span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group" v-bind:class="{'has-error': errors.message}">
                                <label for="message" class="control-label">Message *</label>
                                <textarea id="message" name="message" class="form-control" placeholder="Message for me *" rows="4" v-model="message"></textarea>

                                <span class="help-block" v-if="errors.message">
                                {{ errors.message[0]}}
                            </span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-send" value="Send message">
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>

</template>

<script>
    export default {
        data() {
            return{
                name: null,
                company: null,
                phone: null,
                email: null,
                message: null,
                show:false,
                errors: []
            }
        },
        methods:{
            sendMail() {
                axios.post(
                    '/contact-us',
                    {
                        name:this.name,
                        company:this.company,
                        phone:this.phone,
                        email: this.email,
                        message: this.message

                    }).then((response) => {


                    this.show = true


                }).catch((error) => {

                    this.errors = error.response.data
                })
            }
        }
    }
</script>