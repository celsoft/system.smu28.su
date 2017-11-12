<?php
$this->title = 'Журнал заявок';
?>
<?php $this->beginBlock('content-header') ?>
Журнал заявок <small>управление заявками</small>
<?php $this->endBlock() ?>
<div class="row">
    <div class="col-xs-12">

        <div class="box">
            <div class="box-body" style="padding: 10px 0;">

                <a class="btn btn-app">
                    <span class="badge bg-blue">3</span>
                    <i class="fa fa-flag"></i> Новая
                </a>

                <a class="btn btn-app">
                    <span class="badge bg-yellow">3</span>
                    <i class="fa fa-wrench"></i> В работе
                </a>

                <a class="btn btn-app">
                    <span class="badge bg-primary">3</span>
                    <i class="fa fa-pause"></i> Отложена
                </a>

                <a class="btn btn-app">
                    <span class="badge bg-green">3</span>
                    <i class="fa fa-check"></i> Выполнена
                </a>

                <a class="btn btn-app">
                    <span class="badge bg-red">3</span>
                    <i class="fa fa-ban"></i> Отказ в исполнении
                </a>

                <a class="btn btn-app">
                    <span class="badge bg-red">3</span>
                    <i class="fa fa-ban"></i> Отказ от заявки
                </a>

                <div class="clearfix"></div>

                <button type="button" class="btn btn-success" style="width: auto; margin-left: 10px;">Создать заявку</button>
                <button type="button" class="btn btn-primary" style="width: auto; margin-left: 5px;">Поиск заявок</button>

            </div>
        </div>

        <div class="box">
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody><tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Reason</th>
                    </tr>
                    <tr>
                        <td>183</td>
                        <td>John Doe</td>
                        <td>11-7-2014</td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                        <td>219</td>
                        <td>Alexander Pierce</td>
                        <td>11-7-2014</td>
                        <td><span class="label label-warning">Pending</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                        <td>657</td>
                        <td>Bob Doe</td>
                        <td>11-7-2014</td>
                        <td><span class="label label-primary">Approved</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                        <td>175</td>
                        <td>Mike Doe</td>
                        <td>11-7-2014</td>
                        <td><span class="label label-danger">Denied</span></td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    </tbody></table>
            </div>
            <!-- /.box-body -->
        </div>

        <!-- /.box -->
    </div>
</div>