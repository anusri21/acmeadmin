<!doctype html>
 <html class="no-js" lang=""> 
<head>
   
@include('staff.includes.head')

</head>
<body>


        <!-- Left Panel -->

      @include('staff.includes.left-nav')

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        @include('staff.includes.header')
        <!-- Header-->

       
            
       @yield('content')


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    

</body>
</html>
