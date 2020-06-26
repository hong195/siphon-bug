<template>
    <div>
        <el-row>
            <el-col :span="12" :offset="6">
                <el-page-header @back="goBack" content="Add Post" title=""></el-page-header>
            </el-col>
        </el-row>
        <el-row>
            <el-col :span="12" :offset="6">
                <el-form ref="form"
                         :model="form"
                         :label-position="form.labelPosition"
                         :disabled="form.disabled"
                >
                    <el-form-item label="Title">
                        <el-input v-model="form.title"></el-input>
                    </el-form-item>
                    <el-form-item label="Description">
                        <el-input type="textarea" v-model="form.description"></el-input>
                    </el-form-item>
                    <el-form-item align="right">
                        <el-button type="primary" @click="onSubmit">Create</el-button>
                    </el-form-item>
                </el-form>
            </el-col>
        </el-row>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                form: {
                    labelPosition: 'top',
                    title: '',
                    description: '',
                    disabled: false,
                }
            }
        },
        methods: {
            onSubmit() {
                let title = this.form.title;
                let description = this.form.description;

                this.form.disabled = true;

                console.log(title)


                setTimeout(() => (
                    this.form.disabled = false
                ), 3000);
            },
            goBack() {
                window.location.href = '/';
            }
        }
    }
</script>