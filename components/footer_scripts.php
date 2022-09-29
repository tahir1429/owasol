    
    
    
    <script src="libraries/jQuery-3.5.1/jquery-3.5.1.min.js"></script>
    <script src="libraries/popper/popper.min.js"></script>
    <script src="libraries/bootstrap-5.0.0/js/bootstrap.min.js"></script>
    <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="js/particle.js"></script>
    
    <script>
        // Tooptip
        $(document).ready(function () {
            try {
                $('[data-toggle="tooltip"]').tooltip();
            } catch (error) {
                console.log(error);
            } 
        });
        
        $(document).on('click', '.menu-btn', function () {
            $('.sidebar-toggler').trigger('click');
        });

        var siderbar_open = false;
        $(document).on('click', '.sidebar-toggler', function(){
            if(siderbar_open){
                $('.sidebar').removeClass('active');
                $('.sidebar .sidebar-toggler i').removeClass('fa-times');
                $('.sidebar .sidebar-toggler i').addClass('fa-bars');
                $('.sidebar .sidebar-toggler span').text('Menu');
                siderbar_open = false;
            }else{
                $('.sidebar').addClass('active');
                $('.sidebar .sidebar-toggler i').removeClass('fa-bars');
                $('.sidebar .sidebar-toggler i').addClass('fa-times');
                $('.sidebar .sidebar-toggler span').text('Close');
                siderbar_open = true;
            }
        });
    </script>
</body>
</html>