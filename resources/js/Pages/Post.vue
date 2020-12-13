<template>
    <div>
        This is a post {{ post }}
    </div>
</template>

<script>
export default {
    name: "Post",
    props: {
        post: Object
    }
}
</script>

<style scoped>

</style>
