$(function() {
    // メニューリンククリック時の処理
    $('a').click(function(event) {
        var href = $(this).attr('href');

        // hrefがページ内アンカー（#で始まる）かどうかをチェック
        if (href.startsWith('#')) {
            event.preventDefault();

            var target = $(href);  // アンカーのターゲット要素を取得

            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - $('header').outerHeight()
                }, 1000);
            }
        } else {
            // ページ外リンクや通常のURLなら通常の遷移動作を許可
        }
    });
    
    
    $(function() {
        // 利用不可期間
        var unusable_date_period = {
    start: new Date("2025/12/30"),
    end: new Date("2026/1/3"),
        };

        $("#date").datepicker({
            dateFormat: "yy年m月d日",
            minDate: new Date("2025/11/14"),
            maxDate: "+4m",
            beforeShowDay: function(date) {
                // 利用不可期間
                if (date >= unusable_date_period.start && date <= unusable_date_period.end) {
                    return [false, ''];
                }
                // 木曜は選択不可
                if (date.getDay() === 4) {
                    return [false, ''];
                }
                // 2025/11/14以前は選択不可
                if (date < new Date("2025/11/14")) {
                    return [false, ''];
                }
                return [true, ''];
            },
            onSelect: function(dateText, inst) {
                const parsedDate = $("#date").datepicker("getDate");
                const day = parsedDate.getDay(); // 0:日, 1:月, ..., 6:土
                const timeSelect = document.querySelector('select[name="ご来館希望時間"]');
                const y = parsedDate.getFullYear();
                const m = parsedDate.getMonth() + 1;
                const d = parsedDate.getDate();

                // ▼ 特定日判定（2025/11/14）
                const isSpecialDay = (y === 2025 && m === 11 && d === 14);

                let options = [];

                if (isSpecialDay) {
                    // 11/14（金）のみ特別時間帯
                    options = [
                        ...generateTimeOptions(10, 15),
                        ...generateTimeOptions(18, 21)
                    ];
                } else if (day === 0 || day === 6) {
                    // 土日
                    options = generateTimeOptions(10, 16);
                } else if (day === 4) {
                    // 木曜は選択不可
                    timeSelect.innerHTML = '<option value="">木曜日は選択できません</option>';
                    return;
                } else {
                    // 月〜水・金
                    options = [
                        ...generateTimeOptions(10, 14),
                        ...generateTimeOptions(18, 22)
                    ];
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

});
