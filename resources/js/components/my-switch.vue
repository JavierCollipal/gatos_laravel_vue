<template>
    <div>
        <el-switch
  v-model="value3"
  active-text="Pay by month"
  inactive-text="Pay by year">
</el-switch>

<el-switch
  style="display: block"
  v-model="value4"
  active-color="#13ce66"
  inactive-color="#ff4949"
  active-text="Pay by month"
  inactive-text="Pay by year">
</el-switch>

    </div>
</template>

<script>
  export default {
    data() {
      return {
        value3: true,
        value4: true
      }
    }
  };
</script>