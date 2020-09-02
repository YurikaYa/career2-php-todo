<!DOCTYPE>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
    <title>TODO App</title>
</head>
<body>

<div class="container">
    <div class="col-md-8">
        <h1 class="text-center text-primary py-3">TODO App</h1>

        <h2 class="text-muted py-3">TODO作成</h2>
        <form method="POST" action="/index.php">
            <div class="form-group">
                <label for="title">タスク名</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="タスク名" required>
            </div>
            <div class="form-group">
                <label for="due_date">期限</label>
                <input type="text" class="form-control" name="due_date" id="due_date" required>
            </div>
            <br><br>
            <input type="hidden" name="token" value="ff77bf1a4e1365c589568883c665a2f2f7ab48f9">
            <input class="btn btn-primary"  type="submit" name="btn" value="TODOを作成する">
        </form>

        <hr>

        <h2 class="text-muted py-3">やること一覧</h2>

        <form method="POST" action="/index.php">
            <input type="hidden" name="method" value="DELETE">
            <button class="btn btn-danger" type="submit">TODOを全削除する</button>
        </form>
                <table class="table">
            <thead>
            <tr>
                <th>タイトル</th>
                <th>状態</th>
                <th>期限</th>
                <th>更新</th>
            </tr>
            </thead>
            <tbody>
                        <tr>
                <form method="POST" action="/index.php">
                    <td>ごみだし</td>
                    <td>2020-07-15</td>
                    <td class="label">
                        <label>
                            <select name="status" class="form-control">
                                <option value='0' >未着手</option><option value='1' selected>作業中</option><option value='2' >完了</option>                            </select>
                        </label>
                    </td>
                    <td>
                        <input type="hidden" name="method" value="UPDATE">
                        <input type="hidden" name="todo_id" value="3">
                        <button class="btn btn-primary" type="submit">変更</button>
                    </td>
                </form>
            </tr>
                        <tr>
                <form method="POST" action="/index.php">
                    <td>メール送る</td>
                    <td>2020-07-23</td>
                    <td class="label">
                        <label>
                            <select name="status" class="form-control">
                                <option value='0' >未着手</option><option value='1' >作業中</option><option value='2' selected>完了</option>                            </select>
                        </label>
                    </td>
                    <td>
                        <input type="hidden" name="method" value="UPDATE">
                        <input type="hidden" name="todo_id" value="5">
                        <button class="btn btn-primary" type="submit">変更</button>
                    </td>
                </form>
            </tr>
                        <tr>
                <form method="POST" action="/index.php">
                    <td>宿題</td>
                    <td>2020-07-30</td>
                    <td class="label">
                        <label>
                            <select name="status" class="form-control">
                                <option value='0' selected>未着手</option><option value='1' >作業中</option><option value='2' >完了</option>                            </select>
                        </label>
                    </td>
                    <td>
                        <input type="hidden" name="method" value="UPDATE">
                        <input type="hidden" name="todo_id" value="4">
                        <button class="btn btn-primary" type="submit">変更</button>
                    </td>
                </form>
            </tr>
                        </tbody>
        </table>
    </div>
</div>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
<script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/ja.js"></script>
</script>
<script>
  flatpickr(document.getElementById('due_date'), {
    locale: 'ja',
    dateFormat: "Y/m/d",
    minDate: new Date()
  });
</script>
</body>
</html>