<script src="/js/vue.js"></script>
<script src="/js/axios.min.js"></script>
<li id="notif" class="dropdown notifications-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-bell-o"></i>
        <span class="label label-warning">5</span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">You have 10 notifications</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
                <li v-for="notification in notifications">
                    <a href="#">
                        <i class="fa fa-users text-aqua"></i>{{notification.message}}
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
        <li class="footer"><a href="#">View all</a></li>
    </ul>
</li>

<script>
    new Vue({
        el: '#notif',
        data: {
            notifications:[],
        },
        methods: {
            get_notifications() {
                axios.get('/process_notifications.php', {
                    params: {
                        type: 'STAFF'
                    }
                })
                    .then(({data}) => {
                        this.notifications = data.notifications;
                    })
                    .catch(function (error) {
                        console.log(error);
                    })
            },
        },
        mounted() {
            this.get_notifications();
            setInterval(this.get_notifications,10000);
        },
    })
</script>