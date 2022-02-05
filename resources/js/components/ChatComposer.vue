<template>

         <div class="create_new_comment">

            <!-- current #{user} avatar -->
            <div class="user_avatar">
                <img src="https://s3.amazonaws.com/uifaces/faces/twitter/BillSKenney/73.jpg">
            </div><!-- the input field --><div class="input_comment">
                <input type="text" id="message" placeholder="Joindre la conversation.." v-model="messageText" @keyup.enter="sendMessage">
                <button class="btn btn-link" @click="sendMessage">Envoyer</button>
            </div>

         </div>

</template>

<script>
    export default {
        data(){
            return {
                messageText: ''
            }
        },
        methods:{
            sendMessage(){
                this.$emit('messagesent', {
                    message: this.messageText,
                    user:
                        {
                        name: $('.navbar-right .dropdown-toggle').text()
                    }
                });
                this.messageText='';
            }
        }
    }
</script>


