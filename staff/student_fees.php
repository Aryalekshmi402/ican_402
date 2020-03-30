<?php
include('header.php');
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Student Fess
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
                                    <label for="class">Select Class</label>
                                    <select  name="class"  class="form-control" id="class">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="syllubus">Select Syllabus</label>
                                    <select  name="syllubus" class="form-control" id="syllubus">
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Mobile No</th>
                                        <th>
                                            Status
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <template v-if="students.length">
                                        <tr v-for="(student,index) in form.students">
                                            <td>{{student.fname}}</td>
                                            <td>{{student.mob}}</td>
                                            <td>
                                                <!--                                            <input :value="student.signid" type="checkbox"-->
                                                <!--                                                   @click="select_student(student.signid)">-->
                                                <label class="radio-inline">
                                                    <input type="radio" :value="true"
                                                           v-model="student.status"
                                                           :name="student.mob"
                                                           checked>Present</label>
                                                <label class="radio-inline">
                                                    <input type="radio" :value="false"
                                                           v-model="student.status"
                                                           :name="student.mob">Absent</label>
                                            </td>
                                        </tr>
                                    </template>
                                    <tr v-else>
                                        <td colspan="4" class="text-center">No Student Selected</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <div class="box-footer text-right" v-if="students.length">
                        <button class="btn btn-success">Save</button>
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
                    date:'',
                    duration: '',
                    session: '',
                    session_number: '',
                    students: {}
                }
            },
            methods: {
                select_student(student) {
                    let index = this.form.students.indexOf(student);
                    if (index === -1) {
                        this.form.students.push(student)
                    } else {
                        this.form.students.splice(index, 1)
                    }
                },
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
                get_session() {
                    axios.get('/staff/attendance_process.php', {
                        params: {
                            type: 'SESSION'
                        }
                    })
                        .then(({data}) => {
                            this.sessions = data.sessions;
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

                            for (const student of  data.students) {
                                student['status'] = true;
                            }
                            this.form.students = data.students;
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
                save() {
                    for (const index in this.form) {
                        if (this.form[index] === '' || this.form[index] === []) {
                            swal({
                                title: "Oops",
                                text: "Please Enter Correct Details",
                                icon: "error",
                            });
                            return;
                        }
                    }
                    axios.post('/staff/save_attendance.php', {
                        ...this.form
                    })
                        .then(({data}) => {
                            swal({
                                title: "Success",
                                text: "Attendance Added!",
                                icon: "success",
                            });
                            this.students = [];
                            this.form = {
                                class: '',
                                syllabus: '',
                                date: Date(),
                                duration: '',
                                session: '',
                                session_number: '',
                                students: []
                            };
                        })
                        .catch(function (error) {
                            console.log(error);
                        })
                }
            },
            mounted() {
                this.get_classes();
                this.get_syllabus();
                this.get_session();
            },

        })
    </script>

<?php include('footer.php');
