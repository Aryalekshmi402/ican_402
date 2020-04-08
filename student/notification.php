<script src="/js/vue.js"></script>
<script src="/js/axios.min.js"></script>
<li id="notif" class="dropdown notifications-menu">
    <a href="#" @click="notification_status" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-bell-o"></i>
        <span v-if="count>0" class="label label-warning">{{count}}</span>
    </a>
    <ul class="dropdown-menu">
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
                <li v-for="(notification,index) in notifications" :class="index<count?'new':''">
                    <a href="#">
                        <i class="fa fa-users text-aqua" :title="notification.message"></i>{{notification.message}}
                    </a>
                </li>
                <!-- <li>
                     <a href="#">
                         <i class="fa fa-warning text-yellow"></i> Very long description here
                         that may not fit into the
                         page and may cause design problems
                     </a>
                 </li>
                 <li>
                     <a href="#">
                         <i class="fa fa-users text-red"></i> 5 new members joined
                     </a>
                 </li>
                 <li>
                     <a href="#">
                         <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                     </a>
                 </li>
                 <li>
                     <a href="#">
                         <i class="fa fa-user text-red"></i> You changed your username
                     </a>
                 </li>-->
            </ul>
        </li>
    </ul>
</li>
<style>
    .new {
        background-color: #e8dbcc;
    }
</style>
<script>
    new Vue({
        el: '#notif',
        data: {
            notifications: [],
            count: 0,
        },
        methods: {
            notification_status() {
                axios.get('/process_notifications.php', {
                    params: {
                        type: 'UPDATE_STUDENT'
                    }
                })
                    .then(({data}) => {

                    })
                    .catch(function (error) {
                        console.log(error);
                    })
            },
            get_notifications() {
                axios.get('/process_notifications.php', {
                    params: {
                        type: 'STUDENT'
                    }
                })
                    .then(({data}) => {
                        this.notifications = data.notifications;
                        this.count = data.count;
                    })
                    .catch(function (error) {
                        console.log(error);
                    })
            },
        },
        mounted() {
            this.get_notifications();
            setInterval(this.get_notifications, 10000);
        },
    })
</script>