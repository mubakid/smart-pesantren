<template>
    <div class="form-group mb-2">
        <label v-if="label" class="text-capitalize">{{ label }}</label>
        <input
            :value="modelValue"
            @input="$emit('update:modelValue', $event.target.value)"
            v-bind="$attrs"
            class="form-control"
        />
    </div>
</template>
<script setup>
defineProps({
    label: {
        type: [String, Boolean],
        default: false,
    },
    modelValue: {
        type: String,
        default: "",
    },
});
</script>
