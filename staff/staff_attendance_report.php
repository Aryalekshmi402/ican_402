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
                <li><a href="staffhome.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Report</a></li>
                <li class="active">Attendance</li>
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
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="session">Date</label>
                                    <input @change="get_attendance_report" type="date" class="form-control"
                                           v-model="form.date">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4" v-for="(reports,date) in sorted_report">
                                <div class="text-center report-box">
                                    <strong>{{date}}</strong>
                                    <table class="table text-center table-bordered">
                                        <thead>
                                        <tr>
                                            <th>
                                                Class
                                            </th>
                                            <th>
                                                Session
                                            </th>
                                            <th>
                                                Period
                                            </th>
                                            <th>
                                                Duration / Status
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <template v-for="items in reports">
                                            <tr v-for="item in items">
                                                <td>{{item.classname}}</td>
                                                <td>{{sessions[item.session-1]}}</td>
                                                <td>{{item.session_number}}</td>
                                                <td v-text="item.duration>0?item.duration+' Hr':'AB'"></td>
                                            </tr>
                                        </template>

                                        </tbody>
                                    </table>
                                </div>

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
                sessions:['Morning','Afternoon','Evening'],
                staffs:[],
                form: {
                    staff:<?php echo $_SESSION['loginid'];?>,
                    date: '',
                },
                reports: [],
                sorted_report: {},
            },
            methods: {
                daily_duration(items) {
                    let duration = 0;
                    items.forEach(item => {
                        duration += item.duration;
                    })
                    return duration;
                },
                get_attendance_report() {
                    axios.get('/staff/attendance_process.php', {
                        params: {
                            type: 'STAFF_REPORT',
                            staff: this.form.staff,
                            date: this.form.date,
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


                this.get_attendance_report();
            },
            watch: {
                reports() {
                    this.sorted_report= {};
                    this.reports.forEach(report => {
                        if (this.sorted_report[report.date] === undefined) {
                            this.sorted_report[report.date] = {}
                        }
                        if (this.sorted_report[report.date][report.session_number] === undefined) {
                            this.sorted_report[report.date][report.session_number] = [];
                        }
                        this.sorted_report[report.date][report.session_number].push(report);
                    })

                }
            }
        });
    </script>
    <style>
        .report-box {
            border: 1px solid #ccc;
            padding: 8px;
            height: 172px;
            overflow: auto;
            margin-bottom: 15px;
        }
    </style>

<?php include('footer.php');
