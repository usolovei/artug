<template>
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="message" v-for="status in statuses">
                    <div class="message-header">
                        <p>
                            {{ status.user.username }} said...
                        </p>
                        <p>
<!--                            {{ postedOn(status) }}-->

                            {{ status.created_at | ago | capitalize }}
                        </p>
                    </div>

                    <div class="message-body" v-text="status.body"></div>
                </div>

                <add-to-stream @completed="addStatus"></add-to-stream>

            </div>
        </div>
    </div>
</template>

<script>
    import moment from 'moment';
    import Status from '../models/Status.js';
    import AddToStream from '../components/AddToStream.vue';

    export default {
        name: 'Home',

        components: { AddToStream},
        data(){
          return {
              statuses: []
          }
        },

        filters: {
          ago(date){
              return moment(date).fromNow();
          },

            capitalize(value){
              return value.toUpperCase();
            }
        },

       created() {

           Status.all(statuses => this.statuses = statuses);
       },

        methods:{
            addStatus(status){
                this.statuses.unshift(status);

                alert('Your stream has been added to the stream.')

                window.scrollTo(0,0);
            }
        }
    }
</script>

<style scoped>

</style>
