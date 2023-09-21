<component name="common.page.document">
    <div class="text-center fs-3" style="margin-top: 100px;">{{$message}}</div>
    <div class="container">{{$details}}</div>
    <script>
        setTimeout(() => {
            window.location = "/";
        }, 30000);
    </script>
</component>
