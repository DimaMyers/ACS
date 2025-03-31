<x-layout>
    <head>
        <title>Редактировать</title>

        <style>
            .form-add {
                padding-top: 45px;
            }
            .form-f {
                padding-top: 60px;
                margin-bottom: 15px;
                text-align: left;
            }

            .form-f label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
            }

            .form-f input {
                width: 100%;
                padding: 8px;
                border: 1px solid #ddd;
                border-radius: 4px;
                box-sizing: border-box;
            }

            .Go-btn {
                background-color: #4CAF50;
                color: white;
                border: none;
                padding: 10px 15px;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
                margin-top: 10px;
            }

            .Go-btn:hover {
                background-color: #45a049;
            }
            .Go-btnNo {
                background-color: #af504c;
                color: white;
                border: none;
                padding: 10px 15px;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
                margin-top: 10px;
            }

            .Go-btnNo:hover {
                background-color: #a04945;
            }
        </style>
    </head>
    <body>
        <div class="form-add">
            <form method="POST" action="/acs/add">
                @csrf
                <div class="form-f">
                    <h3 class="text-2XL b1">
                        Заказать пропуск
                    </h3>
                    <label for="last_name">Фамилия</label>
                    <input type="text" id="last_name" name="last_name" required>

                    <label for="first_name">Имя</label>
                    <input type="text" id="first_name" name="first_name" required>

                    <label for="middle_name">Отчество</label>
                    <input type="text" id="middle_name" name="middle_name">

                    <label for="go_date">Дата посещения</label>
                    <input type="date" id="go_date" name="go_date" required>
                </div>
                <button type="submit" class="Go-btn">Отправить</button>
            </form>
        </div>

        <div>
            <form method="POST" action="/acs/add">
                @csrf
                @method('DELETE')
                <div class="form-f">
                    <h3 class="text-2XL b1">
                        Отмена пропуска
                    </h3>
                    <label for="pass_id">Номер пропуска</label>
                    <input type="text" id="pass_id" name="pass_id" required>
                </div>
                <button type="submit" class="Go-btnNo">Отменить</button>
            </form>
        </div>
    </body>
</x-layout>
