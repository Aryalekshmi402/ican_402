<?php
include('header.php');
?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Attendance
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content" id="attendence">

            <!-- Default box -->
            <div class="box">
                <form action="" @submit.prevent="save">
                <br>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="class">Class</label>
                                <select name="" v-model="form.class" class="form-control" id="class">
                                    <option v-for="cls in classes" :value="cls.classid">{{cls.classname}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="syllubus">Syllabus</label>
                                <select v-model="form.syllabus" name="" class="form-control" id="syllubus">
                                    <option v-for="syll in syllabus" :value="syll.syid">{{syll.Name}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="session">Students</label>
                                <select @change="get_attendance_report" v-model="form.student" name="" class="form-control" id="session">
                                    <option v-for="student in students" :value="student.signid">{{student.fname}}
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                        </div>
                    </div>

                </div>
                </form>
                <!-- /.box-body -->
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script>
        new Vue({
            el: '#attendence',
            data: {
                students: [],
                classes: [],
                syllabus: [],
                sessions: [],
                form: {
                    class: '',
                    syllabus: '',
                   student:'',
                },
                reports:[],
            },
            methods: {
                get_classes() {
                    axios.get('/staff/attendance_process.php', {
                        params: {
                            type: 'CLASSES'
                        }
                    })
                        .then(({data}) => {
                            this.classes = data.classes;
                        })
                        .catch(function (error) {
                            console.log(error);
                        })
                },
                get_students() {
                    axios.get('/staff/attendance_process.php', {
                        params: {
                            type: 'STUDENTS',
                            ...this.form
                        }
                     })
                        .then(({data}) => {
                            this.students = data.students;
                        })
                        .catch(function (error) {
                            console.log(error);
                        })
                },
                get_syllabus() {
                    axios.get('/staff/attendance_process.php', {
                        params: {
                            type: 'SYLLABUS'
                        }
                    })
                        .then(({data}) => {
                            this.syllabus = data.syllabus;
                        })
                        .catch(function (error) {
                            console.log(error);
                        })
                },
                get_attendance_report(){
                    axios.get('/staff/attendance_process.php', {
                        params: {
                            type: 'REPORT',
                            student:this.form.student
                        }
                    })
                        .then(({data}) => {
                            this.reports = data.reports;
                        })
                        .catch(function (error) {
                            console.log(error);
                        })
                }

            },
            mounted() {
                this.get_classes();
                this.get_syllabus();
            },
            watch: {
                form: {
                    deep: true,
                    handler() {
                        if (this.form.class !== '' && this.form.syllabus !== '') {
                            this.get_students();
                        }
                    }
                }
            }
        })
    </script>

<?php include('footer.php');
