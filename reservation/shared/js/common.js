$(function() {

    // 利用不可期間
    var unusable_date_period = {
    start: new Date("2025/12/30"),
    end: new Date("2026/1/3"),
    };

    $("#date").datepicker({
        dateFormat: "yy年m月d日",
        minDate: 1, // 今日を選択不可にして翌日から選べる
        maxDate: "+4m",
        beforeShowDay: function(date) {
            // 利用不可期間を除外
            if (date >= unusable_date_period.start && date <= unusable_date_period.end) {
                return [false, ''];
            }
            // 木曜を除外
            if (date.getDay() === 4) { // 木曜
                return [false, ''];
            }
            return [true, ''];
        },
        onSelect: function(dateText, inst) {
            const parsedDate = $("#date").datepicker("getDate");
            const day = parsedDate.getDay(); // 0:日, 1:月, ..., 6:土
            const timeSelect = document.querySelector('select[name="ご来館希望時間"]');

            // ▼ 各曜日の時間オプションを作成
            const weekdayOptions = [
                ...generateTimeOptions(10, 14), // 平日 10〜14時
                ...generateTimeOptions(18, 21)  // 平日 18〜21時
            ];
            const weekendOptions = generateTimeOptions(10, 16); // 土日共通 10〜16時

            let options;
            if (day === 0 || day === 6) { // 日曜(0)・土曜(6)
                options = weekendOptions;
            } else if (day === 4) { // 木曜
                timeSelect.innerHTML = '<option value="">木曜日は選択できません</option>';
                return;
            } else {
                options = weekdayOptions;
            }

            // ▼ セレクトボックスをリセットして新しいオプションを追加
            timeSelect.innerHTML = '<option value="ご希望の時間を選択してください">ご希望の時間を選択してください</option>';
            options.forEach(function(time) {
                const option = document.createElement("option");
                option.value = time;
                option.textContent = time;
                timeSelect.appendChild(option);
            });
        }
    });

    // ▼ 時間オプションを生成する関数（start〜endまで毎時）
    function generateTimeOptions(startHour, endHour) {
        const options = [];
        for (let hour = startHour; hour <= endHour; hour++) {
            options.push(("0" + hour).slice(-2) + ":00");
        }
        return options;
    }

});