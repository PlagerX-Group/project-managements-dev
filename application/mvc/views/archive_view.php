<div class="container-fluid">
    <div class="row">
        <?php require_once("sidemenu_view.php"); ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
                <h1 class="h2"><?=$TITLE?></h1>
            </div>
            <?php if(false) { ?>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                <h1 class="h5">Поиск</h1>
            </div>
            <form action="" method="POST">
                <select class="custom-select d-block w-100 col-md-3" name="list-sorting" required="">
                    <option value="">Тип документа...</option>
                    <option>Договор</option>
                    <option>Техническая документация</option>
                </select>
            </form>
            <?php } ?>
            <div class="alert alert-primary lead text-center">
                В данный момент отсутствует документация в архиве.
            </div>
        </main>
      </div>
    </div>
</div>