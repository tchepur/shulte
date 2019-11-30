<?php
class User
{
    protected $name, $surname, $patronymic, $mail, $gender, $age, $group, $tables;

    public function __construct($name, $surname, $patronymic, $mail, $gender, $age, $group)
    {
        $this->setName($name);
        $this->setSurname($surname);
        $this->setPatronymic($patronymic);
        $this->setAge($age);
        $this->setMail($mail);
        $this->setGender($gender);
        $this->setGroup($group);
        $this->setTables();
    }

    public function __destruct()
    {

    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getPatronymic()
    {
        return $this->patronymic;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getGroup()
    {
        return $this->group;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setGroup($group)
    {
        $this->group = $group;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPatronymic($patronymic)
    {
        $this->patronymic = $patronymic;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function getInfoTest()
    {
        $formInfoTest = "
            <div class='general_block'>
                <table class='info_test_table'>
                    <tr>
                        <td class='test_info_td'><strong><u>Назначение теста Шульте</u></strong></td>
                    </tr>
                    <tr>
                        <td class='test_info_td'>Определение устойчивости внимания и динамики работоспособности.</td>
                    </tr>
                    <tr> <td class='test_info_td'>&nbsp;</td></tr>
                    <tr>
                        <td class='test_info_td'><strong><u>Описание теста Шульте</u></strong></td>
                    </tr>
                    <tr>
                        <td class='test_info_td'>Поочередно предлагается пять таблиц на которых в произвольном порядке расположены 
                        числа от 1 до 25. Испытуемый должен отыскать и выбрать числа в порядке их возрастания. 
                        Проба повторяется с пятью разными таблицами.</td>
                    </tr>
                    <tr> <td class='test_info_td'>&nbsp;</td> </tr>
                    <tr>
                        <td class='test_info_td'><strong><u>Инструкция к прохождению теста</u></strong></td>
                    </tr>
                    <tr>
                        <td class='test_info_td'>В среднем тестирование длится 5-7 минут (в зависимости от уровня внимания и концетрации
                        испытуемого). Вам необходимо поочередно отмечать числа от 1 до 25, распределенных по таблице определенным
                        образом. Таблицу Шульте необходимо проходить смотря строго в центр таблицы и периферийным, боковым 
                        зрением находить цифры в порядке их возрастания. Чем быстрее будут найдены все цифры 
                        или буквы в порядке их возрастания, тем лучше. Во время прохождения упражнения необходимо остановить 
                        внутренний диалог, то есть ничего не проговаривать про себя.</td>
                    </tr>
                    <tr>
                        <td class = \"img_info_test\" background = \"users_photo/exapmle_test.png\" ></td>                        
                    </tr>
                </table> 
                    <div>
                     <button class='button_start_test'>Начать тестирование</button></div> 
            </div>
        ";
        return $formInfoTest;
    }

    public function setTables()
    {
        $this->tables = array(
            array(13, 6, 5, 15, 22, 1, 4, 2, 21, 17, 8, 11, 3, 18, 16, 12, 9, 19, 25, 23, 7, 14, 20, 24, 10),
            array(21, 12, 7, 1, 20, 6, 15, 17, 3, 18, 19, 4, 8, 25, 13, 24, 2, 22, 10, 5, 9, 14, 11, 23, 16),
            array(9, 5, 11, 23, 20, 14, 25, 17, 1, 6, 3, 21, 7, 19, 13, 18, 12, 24, 16, 4, 8, 15, 2, 10, 22),
            array(5, 14, 12, 23, 2, 18, 25, 7, 24, 13, 11, 3, 20, 4, 16, 8, 10, 19, 22, 1, 21, 15, 9, 17, 6),
            array(22, 25, 7, 21, 11, 6, 2, 10, 3, 23, 17, 12, 16, 5, 18, 1, 15, 20, 9, 24, 19, 13, 4, 14, 8),
            array(14, 18, 7, 24, 21, 22, 1, 10, 9, 6, 16, 5, 8, 20, 11, 23, 2, 25, 3, 15, 19, 13, 17, 12, 4),
            array(1, 15, 20, 24, 18, 13, 22, 19, 17, 25, 7, 4, 2, 11, 16, 3, 8, 5, 23, 12, 6, 9, 14, 10, 21),
            array(8, 22, 10, 21, 6, 11, 19, 20, 17, 7, 24, 23, 4, 13, 12, 2, 25, 1, 16, 14, 15, 5, 3, 18, 9),
            array(7, 5, 20, 6, 14, 18, 1, 8, 21, 2, 15, 16, 3, 25, 19, 24, 4, 9, 17, 13, 22, 12, 23, 11, 10),
            array(1, 10, 9, 17, 21, 5, 20, 19, 22, 7, 6, 4, 18, 16, 14, 15, 11, 24, 8, 13, 23, 3, 25, 2, 12),
            array(23, 7, 16, 24, 22, 4, 1, 9, 17, 3, 18, 21, 14, 2, 20, 25, 10, 19, 8, 13, 12, 6, 5, 11, 15),
        );
    }

    public function startTest()
    {
        $id_table = 0;
        $tables_code = array();
        $cnt_array = count($this->tables);
        $num_table = rand(0, $cnt_array);
        $tables_code[$id_table] = $this->createTable($id_table, $num_table);
        $this->shiftArray($num_table, $this->tables);
        $id_table++;
        $cnt_array--;

        $num_table = rand(0, $cnt_array);
        $tables_code[$id_table] = $this->createTable($id_table, $num_table);
        $this->shiftArray($num_table, $this->tables);
        $id_table++;
        $cnt_array--;

        $num_table = rand(0, $cnt_array);
        $tables_code[$id_table] = $this->createTable($id_table, $num_table);
        $this->shiftArray($num_table, $this->tables);
        $id_table++;
        $cnt_array--;

        $num_table = rand(0, $cnt_array);
        $tables_code[$id_table] = $this->createTable($id_table, $num_table);
        $this->shiftArray($num_table, $this->tables);
        $id_table++;
        $cnt_array--;

        $num_table = rand(0, $cnt_array);
        $tables_code[$id_table] = $this->createTable($id_table, $num_table);
        $this->shiftArray($num_table, $this->tables);
        $cnt_array--;

        $this->setTables();
        return $tables_code;
    }

    public function endTest($num_mistakes, $each_time_table, $in_time)
    {
        $strResult = '';
        $sec_testing = array_sum($each_time_table);
        if ($in_time == true) {
            $strResult = "<div class=\"success_end_test\">Поздравляем, вы успешно завершили тестирование!</div>";
            $strResult .= $this->showHistoryTests($num_mistakes, $each_time_table);
        } else {
            $strResult = '<div class="time_out">К сожалению ваше время на прохождение тестирования вышло. Это
            сообщение означает, что в момент прохождения тестирования вы были крайне не внимательный! 
            Такое возможно по ряду причин, например, в следствии высокой степени усталости. Хорошо отдохните, выберите
            выходной день, когда не будете ничем заняты и попробуйте пройти тестирование в следующий раз! Желаем вам удачи.</div>';
        }
        return $strResult;
    }


    public function createTable($id_table, $num_table)
    {
        if ($id_table == 0) {
            $table_code = '<table class="test_table_' . $id_table . '">';
            $table_code .= '<tr ><td style="border: 0px;" colspan="5"><div class="test_table_header_' . $id_table . '">Таблица №' . ($id_table + 1) . '</div></td></tr>';
        } else {
            $table_code = '<table class="test_table_' . $id_table . '" hidden>';
            $table_code .= '<tr ><td style="border: 0px;" colspan="5"><div class="test_table_header_' . $id_table . '">Таблица №' . ($id_table + 1) . '</div></td></tr>';
        }
        $table_code .= '<tr><td style="border: 0px;" colspan="3"><span>Время прохождения теста</span></td><td style="border: 0px; text-align: right" colspan="2"><div class="timer"></div></td></tr>';
        $table_code .= '
                <tr>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][0] . '">' . $this->tables[$num_table][0] . '</td>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][1] . '">' . $this->tables[$num_table][1] . '</td>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][2] . '">' . $this->tables[$num_table][2] . '</td>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][3] . '">' . $this->tables[$num_table][3] . '</td>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][4] . '">' . $this->tables[$num_table][4] . '</td>
                </tr>
                <tr>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][5] . '">' . $this->tables[$num_table][5] . '</td>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][6] . '">' . $this->tables[$num_table][6] . '</td>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][7] . '">' . $this->tables[$num_table][7] . '</td>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][8] . '">' . $this->tables[$num_table][8] . '</td>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][9] . '">' . $this->tables[$num_table][9] . '</td>
                </tr>
                <tr>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][10] . '">' . $this->tables[$num_table][10] . '</td>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][11] . '">' . $this->tables[$num_table][11] . '</td>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][12] . '">' . $this->tables[$num_table][12] . '</td>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][13] . '">' . $this->tables[$num_table][13] . '</td>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][14] . '">' . $this->tables[$num_table][14] . '</td>
                </tr>
                <tr>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][15] . '">' . $this->tables[$num_table][15] . '</td>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][16] . '">' . $this->tables[$num_table][16] . '</td>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][17] . '">' . $this->tables[$num_table][17] . '</td>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][18] . '">' . $this->tables[$num_table][18] . '</td>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][19] . '">' . $this->tables[$num_table][19] . '</td>
                </tr>
                <tr>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][20] . '">' . $this->tables[$num_table][20] . '</td>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][21] . '">' . $this->tables[$num_table][21] . '</td>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][22] . '">' . $this->tables[$num_table][22] . '</td>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][23] . '">' . $this->tables[$num_table][23] . '</td>
                    <td><button class="btn_test_table" value="' . $this->tables[$num_table][24] . '">' . $this->tables[$num_table][24] . '</td>
                </tr>
            </table>
        ';
        return $table_code;
    }

    public function shiftArray($pos, $array)
    {
        $cntArray = count($array);
        for ($i = $pos; $i < $cntArray - 1; $i++) {
            for ($j = 0; $j < 5; $j++) {
                $array[$i][$j] = $array[$i + 1][$j];
            }
        }
    }

    public function showHistoryTests($num_mistakes, $each_time_table)
    {
        $strResult = '';
        $strTimeTables = '';
        $effective_work = array_sum($each_time_table) / count($each_time_table);
        $VR = $each_time_table[0] / $effective_work;
        $PU = $each_time_table[3] / $effective_work;
        $array_second_part_table = array(
            '<td>Количество совершенных ошибок</td><td class="td_last">' . $num_mistakes . '</td>',
            '<td>Среднее время нахождения нужного числа</td><td class="td_last">' . round((array_sum($each_time_table) / (25 * count($each_time_table))), 2) . ' сек.</td>',
            '<td>Эффективность работы</td><td class="td_last">' . round($effective_work, 2) . ' сек.</td>',
            '<td>Степень врабатываемости</td><td class="td_last">' . round($VR, 2) . ' сек.</td>',
            '<td>Психическая устойчивость</td><td class="td_last">' . round($PU, 2) . ' сек.</td>'

        );
        for ($i = 0; $i < count($each_time_table); $i++) {
            $strTimeTables .= '<tr><td>Время таблицы ' . ($i + 1) . '</td><td class="td_info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td class="td_right">' . $each_time_table[$i] . ' сек.</td>';
            $strTimeTables .= $array_second_part_table[$i] . '</tr>';
        }
        $strResult .= '
            <table class="show_info">
                <tr>
                    <td colspan="4">Время прохождения тестирования</td><td class="td_last">' . intval(array_sum($each_time_table) / 60) . ' мин ' . (array_sum($each_time_table) % 60) . ' сек.</td> 
                </tr>' . $strTimeTables . '
            </table>
            <table class="show_info _res_show_info">
                <tr style="text-align: justify">
                    <td colspan="5">'.$this->createConclusion($effective_work, $VR, $PU).'</td>
                </tr>
                <tr style="text-align: justify">
                    <td>Комментарий психолога: на данный момент психолог не оставил рекомендаций/замечаний к вашему результату прохождения тестирования.</td>
                </tr>
            </table>
        ';

        return $strResult;
    }

    public function createConclusion($ER, $VR, $PU)
    {
        $strResult = 'Заключение: ';
        if ($ER <= 30) {
            $strResult .= 'Ваша эффективность работы оценивается в 5 баллов. Это означает, что на текущий момент вы обладаете 
            наиболее высокой степенью эффективности работы. ';
        } elseif ($ER <= 35) {
            $strResult .= 'Ваша эффективность работы оценивается в 4 балла. Это означает, что на текущий момент вы обладаете 
            дочтатояно высокой степенью эффективности работы. ';
        } elseif ($ER <= 45) {
            $strResult .= 'Ваша эффективность работы оценивается в 3 балла. Это означает, что на текущий момент вы обладаете 
            средней степенью эффективности работы. ';
        } elseif ($ER <= 55) {
            $strResult .= 'Ваша эффективность работы оценивается в 2 балла. Это означает, что на текущий момент вы обладаете 
            степенью эффективности работы ниже среднего. ';
        } else {
            $strResult .= 'Ваша эффективность работы оценивается в 1 балл. Это означает, что на текущий момент вы обладаете 
            крайне низкой степенью эффективности работы. ';
        }
        if ($VR <= 1) {
            $strResult .= 'Ваш показатель степени врабатываемости - высокий. ';
        } else {
            $strResult .= 'Ваш показатель степени врабатываемости - низкий. ';
        }
        if ($PU <= 1) {
            $strResult .= 'По результатам тестировани можно сделать вывод о вашей хорошей психической устойчивости. ';
        } else {
            $strResult .= 'По результатам тестировани можно сделать вывод о вашей низкой психической устойчивости. ';
        }
        return $strResult;
    }
}

class Psych extends User
{
    protected function createGroup()
    {

    }

    protected function showUsersHistoryTest()
    {

    }

    protected function compareUsersTest()
    {

    }
}

class testedUser extends User
{
    protected function compareTests()
    {

    }
}
