<template>
    Hey {{ name }}!
    <a :href="route('second')">Go to second page.</a>
</template>

<script>
export default {
    props: {
        name: String,
    },
    data() {
        return {};
    },
};
</script>
