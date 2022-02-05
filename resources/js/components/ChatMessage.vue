<template>

<li>
<!-- current #{user} avatar -->
<div class="user_avatar">
    <img v-bind:src="'/uploads/avatars/' + message.user.avatar">
</div><!-- the comment body -->
<div class="comment_body">
    <p>{{ message.message }}</p>
</div>
<div class="comment_toolbar">

<!-- inc. date and time -->
<div class="comment_details">
    <ul>
        <li><i class="fa fa-clock-o"></i>{{ message.created_at }}</li>
        <li><i class="fa fa-pencil"></i> <span class="user">{{ message.user.name }}</span></li>
    </ul>
</div>
</div>
</li>    
</template>

<script>

    export default {
props:['message']
    }
</script>

<style>
.chat-message {
    padding: 1rem;
}
    .chat-message > p {
        margin-bottom: 5rem;
    }
</style>
