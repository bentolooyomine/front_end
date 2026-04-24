<!DOCTYPE html>
<html>
<head>
    <title>Redirect...</title>
</head>
<body>
    <form id="autoForm" method="POST" action="<?= base_url('page/detail_beritas') ?>">
        <input type="hidden" name="id" value="<?= $id ?>">
    </form>

    <script>
        document.getElementById('autoForm').submit();
    </script>
</body>
</html>