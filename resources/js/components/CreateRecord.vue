<template>
    <div>
        <button @click="createRecord()" type="button" class="btn btn-primary">Create record</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            createRecord(){
                axios({
                    method: 'POST',
                    url: 'api/record',
                    data: {
                        emotions: [{id: 90, intensity: 64, new_intensity: 64}, {id: 2, intensity: 60, new_intensity: 60}],
                        distortions: [{'id': 1001}],
                        situation: 'Test situation',
                    }
                }).then(function (response) {
                    
                }.bind(this))
                .catch(error => {
                    this.serverErrorMessage = error.response.data.message
                    this.responseMessage = null
                });
            }
        }
    }
</script>
