<section class="text-center" style="padding: 3em 0;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Students</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-striped">
                    <?php foreach($this->students as $student): ?>
                    <tr>
                        <td><?php echo $student->ID; ?></td>
                        <td><?php echo $student->name; ?></td>
                        <td><?php echo $student->email; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</section>