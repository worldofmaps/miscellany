<?php

return [
    'actions'       => [
        'add_epoch'         => 'הוסף עידן',
        'add_intercalary'   => 'הוסף ימים מעוברים',
        'add_month'         => 'הוסף חודש',
        'add_moon'          => 'הוסף ירח',
        'add_season'        => 'הוסף עונה',
        'add_week'          => 'הוסף שבוע עם שם',
        'add_weekday'       => 'הוסף יום בשבוע',
        'add_year'          => 'הוסף שנה עם שם',
        'set_today'         => 'קבע בתור היום הנוכחי',
        'today'             => 'היום',
    ],
    'checkboxes'    => [
        'is_recurring'  => 'מתרחש כל שנה',
    ],
    'create'        => [
        'description'   => 'צור לוח שנה חדש',
        'success'       => 'לוח שנה \':name\' נוצר',
        'title'         => 'לוח שנה חדש',
    ],
    'destroy'       => [
        'success'   => 'לוח שנה \':name\' הוסר',
    ],
    'edit'          => [
        'description'   => 'עדכן לוח שנה',
        'success'       => 'לוח שנה \':name\' עודכן',
        'title'         => 'ערוך לוח שנה :name',
        'today'         => 'התאריך עודכן',
    ],
    'event'         => [
        'actions'   => [
            'existing'  => 'אובייקט קיים',
            'new'       => 'אירוע חדש',
            'switch'    => 'ערוך בחירה',
        ],
        'create'    => [
            'description'   => 'צור אירוע בלוח השנה',
            'success'       => 'האירוע נוצר בהצלחה',
            'title'         => 'הוסף אירוע ללוח השנה \':name\'',
        ],
        'destroy'   => 'האירוע הוסר מלוח השנה \':name\'',
        'edit'      => [
            'description'   => 'עדכן אירוע',
            'success'       => 'האירוע הודכן',
            'title'         => 'עדכן אירוע ל:name',
        ],
        'helpers'   => [
            'add'   => 'הוסף אירוע קיים ללוח השנה',
            'new'   => 'או צור אירוע חדש',
        ],
        'modal'     => [
            'title' => 'הוסף אירוע ללוח השנה',
        ],
        'success'   => 'האירוע \':event\' נוסף ללוח השנה',
    ],
    'events'        => [
        'description'   => 'אירועים בלוח השנה הזה',
        'title'         => 'אירועים בלוח השנה :name',
    ],
    'fields'        => [
        'colour'                => 'צבע',
        'comment'               => 'הערה',
        'current_day'           => 'יום נוכחי',
        'current_month'         => 'חודש נוכחי',
        'current_year'          => 'שנה נוכחית',
        'date'                  => 'תאריך נוכחי',
        'has_leap_year'         => 'יש שנים מעוברות',
        'intercalary'           => 'ימים מעוברים',
        'is_incrementing'       => 'תאריך מתעדכן',
        'is_recurring'          => 'מחזורי',
        'leap_year_amount'      => 'הוסף ימים',
        'leap_year_month'       => 'חודש',
        'leap_year_offset'      => 'מדי',
        'leap_year_start'       => 'שנה מעוברת',
        'length'                => 'אורך האירוע',
        'length_days'           => 'יום :count|:count ימים',
        'months'                => 'חודשים',
        'moons'                 => 'ירחים',
        'name'                  => 'שם',
        'parameters'            => 'פרמטרים',
        'recurring_periodicity' => 'מחזורי',
        'recurring_until'       => 'חוזר עד השנה',
        'reset'                 => 'שבועות מתאפסים',
        'seasons'               => 'עונות',
        'start_offset'          => 'הזזה בהתחלה',
        'suffix'                => 'סיומת',
        'type'                  => 'סוג',
        'week_names'            => 'שמות השבועות',
        'weekdays'              => 'ימי השבוע',
    ],
    'helpers'       => [
        'month_type'    => 'חודשים מעוברים לא משתמשים בימי השבוע, אך נספרים כנגד עונות וחודשים',
        'start_offset'  => 'כברירת מחדל, לוח השנה מתחיל ביום הראשון בשבוע בשנה 0. שינוי בשדה זה משפיע על המיקום של היום הראשון בלוח השנה.',
    ],
    'hints'         => [
        'intercalary'       => 'ימים הנופלים מחוץ לחודשים והשבועות הרגילים. לא משפיעים על ימי השבוע אך משפיעים על מחזורי הירחים.',
        'is_incrementing'   => 'לוח השנה מתקדם כל יום ב00:00 UTC (02:00 או 03:00 בשעון ישראל).',
        'is_recurring'      => 'ניתן להגדיר אירוע כמחזורי. הוא יתרחש מדי חודש או שנה באותו מועד.',
        'months'            => 'חייבים להיות לפחות 2 חודשים בשנה.',
        'moons'             => 'הוספת ירחים יגרום להם להופיע כל ירח מלא וירח מולד. אם מחזור הירח ארוך מ10 ימים, יופיעו גם ירחים מתמלאים ונחסרים.',
        'reset'             => 'כל חודש או שנה תמיד יתחילו ביום הראשון בשבוע.',
        'seasons'           => 'צרו עונות עבור לוח השנה שלכם על ידי הגדרת ההתחלה של כל אחת. Kanka תטפל בכל השאר.',
        'weekdays'          => 'קבע שמות לימי השבוע. חייבים להיות לפחות 2 ימים בשבוע.',
        'weeks'             => 'ניתן להגדיר שמות לשבועות חשובים בשנה.',
        'years'             => 'ישנן שנים משמעותיות מספיק שיהיה להן שמות יחודיים.',
    ],
    'index'         => [
        'add'           => 'לוח שנה חדש',
        'description'   => 'נהל את לוחות השנה של :name.',
        'header'        => 'לוחות השנה של :name',
        'title'         => 'לוחות שנה',
    ],
    'layouts'       => [
        'month' => 'חודש',
        'year'  => 'שנה',
    ],
    'modals'        => [
        'switcher'  => [
            'title' => 'רשימת שנים',
        ],
    ],
    'month_types'   => [
        'intercalary'   => 'מעובר',
        'standard'      => 'רגיל',
    ],
    'options'       => [
        'events'    => [
            'recurring_periodicity' => [
                'month' => 'חודשי',
                'year'  => 'שנתי',
            ],
        ],
        'resets'    => [
            ''      => 'אף פעם',
            'month' => 'מדי חודש',
            'year'  => 'מדי שנה',
        ],
    ],
    'panels'        => [
        'intercalary'   => 'ימים מעוברים',
        'leap_year'     => 'שנים מעוברות',
        'months'        => 'חודשים',
        'weeks'         => 'שבועות',
        'years'         => 'שנים מיוחדות',
    ],
    'parameters'    => [
        'intercalary'   => [
            'length'    => 'אורך בימים',
            'month'     => 'בסוף איזה חודש',
            'name'      => 'שם העיבור',
        ],
        'month'         => [
            'alias' => 'כינוי לחודש',
            'length'=> 'ימים',
            'name'  => 'שם החודש',
            'type'  => 'סוג',
        ],
        'moon'          => [
            'fullmoon'  => 'ירח מלא מדי (ימים)',
            'name'      => 'שם הירח',
            'offset'    => 'הזזה של הירח המלא הראשון',
        ],
        'seasons'       => [
            'day'   => 'יום התלה',
            'month' => 'חודש התחלה',
            'name'  => 'שם העונה',
        ],
        'weeks'         => [
            'name'      => 'שם השבוע',
            'number'    => 'מספר',
        ],
        'year'          => [
            'name'      => 'שם השנה',
            'number'    => 'שנה',
        ],
    ],
    'placeholders'  => [
        'colour'            => 'צבע',
        'comment'           => 'יום הולדת, פסטיבל, היום הארוך בשנה',
        'date'              => 'התאריך הנוכחי',
        'leap_year_amount'  => 'מספר הימים הנוספים בשנה מעוברת',
        'leap_year_month'   => 'החודש אליו נוספים הימים',
        'leap_year_offset'  => 'כל כמה שנים יש שנה מעוברת',
        'leap_year_start'   => 'השנה המעוברת הראשונה',
        'length'            => 'אורך האירוע בימים',
        'months'            => 'מספר החודשים בשנה',
        'name'              => 'שם לוח השנה',
        'recurring_until'   => 'שנת החזרה האחרונה (השאר ריק אם חוזר לעד)',
        'seasons'           => 'מספר עונות',
        'suffix'            => 'סיומת תקופה נוכחית',
        'type'              => 'סוג לוח השנה',
        'weekdays'          => 'מספר הימים בשבוע',
    ],
    'show'          => [
        'description'       => 'מבט מפורט על לוח השנה',
        'missing_details'   => 'לא ניתן להציג את לוח השנה הזה. לוח שנה חייב להכיל לפחות 2 חודשים ו2 ימים.',
        'moon_full_moon'    => 'ירח מלא :moon',
        'moon_new_moon'     => 'ירח מולד :moon',
        'moon_waning_moon'  => 'ירח מתמלא :moon',
        'moon_waxing_moon'  => 'ירח נחסר :moon',
        'tabs'              => [
            'events'        => 'אירועי לוח שנה',
            'information'   => 'מידע',
            'weather'       => 'מזג אוויר',
        ],
        'title'             => 'לוח שנה :name',
    ],
];
