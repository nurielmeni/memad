<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\widgets\memadEmployee\MemadEmployeeWidget;

$this->title = 'אודות';
?>

<header>
    <h1 class="text-center fg-white">על המימד השלישי</h1>
</header>

<article class="about">
    <div class="row center-block">
        <div class="col-sm-6 col-xs-12 right">
            <h3 style="margin-top: 0;">עלינו בקצרה</h3>
            <p>חברת "המימד השלישי" הוקמה בשנת 2007, אנו מתמחים בגיוס והובלת תהליכי Sourcing ו- Head Hunting לתפקידים השונים, בהתאם לצרכי הארגון.</p>
            <p>בכדי לספק את השירות המקצועי ביותר ללקוחותינו, אנו ניקח אחריות על התהליך כולו ונוביל תהליך גיוס ממוקד שמטרתו לחסוך במשאבי הזמן של הארגון.</p>
            <p>אנו מתמקדים באיכות ולא בכמות, אנו מאמינים בגיוס ממוקד שייתן מענה יעיל ומהיר ללקוחותינו.</p>
            <p>צוות "המימד השלישי", מורכב כולו ממנהלי ומנהלות לקוחות מנוסים ובעלי/ות שנות ניסיון רבות בתחום הגיוס 
    והSourcing-. רובם אף מגיעים עם ניסיון בגיוס / ניהול גיוס או HR בארגונים מובילים בתעשייה ובחברות הייטק.</p>
            <p>לחברת "המימד השלישי", מערכת גיוס מתקדמת, שכוללת מאות אלפי מועמדים ומועמדות בתפקידים ודרגים שונים  ובכל רמות השכר.  אנו מקפידים לשמור על קשר רציף עם המועמדים, ללוות ולייעץ להם בכל הקשור לניהול הקריירה במהלך השנים.</p>
            <p><strong>מערכת הגיוס וניהול המידע המתקדמת, בשילוב עם עבודה מקצועית ללא פשרות של צוות הגיוס שלנו, מאפשרים לנו יכולת איתור והתאמה של מועמדים ומועמדות במהירות, ביעילות ובכפוף לדרישות התפקיד.</strong></p>
            <p>הגישה השירותית והמקצועית של מנהלי ומנהלות הלקוחות שלנו, מאפשרת ללקוחותינו להתמקד בבדיקת קו"ח של המועמדים המתאימים ביותר וזאת לאחר שעברו סינון ומיון קפדני.</p>
            <p><strong>לכל המועמדים שלנו וללקוחותינו, מובטחת דיסקרטיות מוחלטת.
    קו"ח של המועמדים השונים לצד דרישות התפקיד של לקוחותינו נשמרים בחשאיות מוחלטת.</strong></p>
        </div>
        <div class="col-sm-6 col-xs-12 left">
            
            <ul>
                <h3 style="margin-top: 0;">מדוע כדאי לעבוד אתנו:</h3>
                <li>שנות ניסיון רבות בגיוס והשמה של עובדים, מנהלים ובכירים בשוק הישראלי ובשווקים רבים בחו"ל.</li>
                <li>רשת קשרים רחבה עם מנהלים ועובדים בכירים בחברות היי-טק ואחרות בשוק המקומי.</li>
                <li>מחויבות לתהליך ולתוצאות. אנו רואים את עצמנו כשותפים מלאים לתהליך הגיוס מתחילתו ועד סופו.</li>
                <li>ביצוע בפועל של תהליכי Head Hunting מורכבים וייחודיים המבטיחים הגעה למועמדים ספציפיים תוך התחייבות לחיסיון מוחלט של התהליך כלפי הארגון וגורמי שוק אחרים.</li>
                <li>מערכת גיוס חדשנית, המנהלת מאגר מידע עדכני שכולל מאות אלפי מועמדים/ות.</li>
                <li>שירותיות ומהימנות ללא פשרות. אנו עומדים לרשות לקוחותינו בכול זמן ועת. </li>
            </ul>
            <p>נשמח לתת לכם שירות ברמה אחרת ממה שהכרתם עד היום, צוות המימד השלישי .</p>
        </div>
    </div>
</article>

<section class="about-employees">
    <?= Html::tag('h2', 'הצוות שלנו', ['class' => 'memad-section-title  text-center']) ?>
    <div class="panels-employees flex space-between">
        <?php foreach($employees as $employee) : ?>
            <?= MemadEmployeeWidget::widget(['model' => $employee]) ?>
        <?php endforeach; ?>
    </div>
</section>