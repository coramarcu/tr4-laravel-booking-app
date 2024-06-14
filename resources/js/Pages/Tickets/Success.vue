<template>
    <h1>
        You have successfully purchased tickets for
        {{ event.event_name }}
    </h1>
</template>

<script>
export default {
    props: {
        event: {
            required: true,
        },
    },
    data() {
        return {};
    },
};
</script>
