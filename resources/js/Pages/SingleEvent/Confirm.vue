<template>
    <h1>You have successfully purchased tickets to {{ event.event_name }}</h1>
</template>

<script>
export default {
    props: {
        event: {
            type: Object,
            required: true,
        },
    },
};
</script>
