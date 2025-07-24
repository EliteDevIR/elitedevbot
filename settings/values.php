<?php

$mainValues = [
    'banned' => '❌ | متاسفانه به دلیل عدم رعایت قوانین، شما مسدود شده‌اید.',
    'customer_custome_plan_day' => "⏰ | لطفا تعداد روز اشتراک را وارد کنید (مثلاً: 30):\n💰 | هزینه هر روز: DAY-PRICE تومان",
    'customer_custome_plan_volume'=>"🔋 | لطفا حجم سرویس را به گیگابایت وارد کنید (مثلاً: 50):\n💰 | هزینه هر گیگ: VOLUME-PRICE تومان",
    'customer_custome_plan_name'=>'📝 | یک نام دلخواه برای کانفیگ وارد کنید (فقط حروف انگلیسی و اعداد)',
    'send_user_id'=>"🆔 | آیدی عددی کاربر مورد نظر را ارسال کنید:",
    'enter_decrease_amount'=>"➖ | مبلغی که می‌خواهید از کیف پول کاربر کسر شود را وارد کنید:",
    'enter_increase_amount'=>"➕ | مبلغی که می‌خواهید به کیف پول کاربر اضافه شود را وارد کنید:",
    'user_not_found'=>"🤔 | کاربری با این مشخصات یافت نشد. لطفا دوباره بررسی کنید.",
    'amount_decreased_from_your_wallet'=> "✅ | مبلغ AMOUNT تومان از حساب شما کسر شد.",
    'amount_decreased_from_user_wallet'=>"✅ | مبلغ AMOUNT تومان از کیف پول کاربر کسر شد.",
    'increase_wallet_cart_to_cart'=>"
💳 | جهت شارژ کیف پول، لطفا تصویر فیش واریزی را ارسال کنید:

📌 | شماره حساب: <code>ACCOUNT-NUMBER</code>
👤 | صاحب حساب: HOLDER-NAME

✅ | پس از تایید پرداخت، مبلغ به صورت خودکار به کیف پول شما اضافه خواهد شد.
",
    'order_increase_sent'=>"✅ | درخواست شارژ کیف پول شما با موفقیت ثبت شد و در صف بررسی قرار گرفت.",
    'please_send_only_image'=>"🖼️ | لطفا فقط تصویر ارسال کنید.",
    'reached_main_menu'=>"🏠 | به منوی اصلی بازگشتید.

🚪 /start",
    'increase_wallet_request_message'=>"
💳 | درخواست افزایش موجودی (کارت به کارت)

💰 | مبلغ: PRICE تومان
🧑‍💻 | نام: NAME
🆔 | یوزرنیم: @USERNAME
🔢 | کد کاربری: <code>USER-ID</code>
",
    'out_of_connection_capacity'=>'⚠️ | ظرفیت این پلن به اتمام رسیده است.',
    'out_of_server_capacity'=>'⚠️ | ظرفیت این سرور به اتمام رسیده است.',
    'can_create_specific_account'=> "ℹ️ | روی این پلن فقط می‌توانید AMOUNT اکانت بسازید.",
    'buy_account_cart_to_cart'=>"
💳 | جهت تکمیل خرید، لطفا تصویر فیش واریزی را ارسال کنید:

📌 | شماره حساب: <code>ACCOUNT-NUMBER</code>
👤 | صاحب حساب: HOLDER-NAME

✅ | پس از تایید پرداخت، لینک کانفیگ به صورت خودکار برای شما ارسال خواهد شد.
",
    'renew_ccount_cart_to_cart'=>"
💳 | جهت تمدید سرویس، لطفا تصویر فیش واریزی را ارسال کنید:

📌 | شماره حساب: <code>ACCOUNT-NUMBER</code>
👤 | صاحب حساب: HOLDER-NAME
",
    'order_buy_sent'=>"✅ | سفارش شما با موفقیت ثبت شد و پس از تایید برایتان ارسال خواهد شد.",
    'buy_custom_account_request'=>"
➕ | خرید پلن دلخواه (TYPE)
    
▫️ | آیدی کاربر: <code>USER-ID</code>
👨‍💼 | اسم کاربر: <a href='tg://user?id=USER-ID'>NAME</a>
⚡️ | نام کاربری: @USERNAME
💰 | مبلغ: PRICE تومان
✏️ | نام سرویس: REMARK
🔋 | حجم: VOLUME گیگ
⏰ | مدت: DAYS روز
",
'buy_new_account_request'=>"
🛍️ | خرید جدید (TYPE)

▫️ | آیدی کاربر: <code>USER-ID</code>
👨‍💼 | اسم کاربر: NAME
⚡️ | نام کاربری: @USERNAME
💰 | مبلغ: PRICE تومان
🖥️ | سرور: SERVERNAME
✏️ | نام سرویس: REMARK
🔋 | حجم: VOLUME گیگ
⏰ | مدت: DAYS روز
",
'buy_new_much_account_request'=>"
🛍️ | خرید انبوه (TYPE)

▫️ | آیدی کاربر: <code>USER-ID</code>
👨‍💼 | اسم کاربر: NAME
⚡️ | نام کاربری: @USERNAME
💰 | مبلغ کل: PRICE تومان
 #️⃣ | تعداد اکانت: ACCOUNT-COUNT
✏️ | نام سرویس: REMARK
",
'invite_buy_new_account'=>"
👨‍👦‍👦 | خرید توسط زیرمجموعه

👨‍💼 | آیدی کاربر: <code>USER-ID</code>
🗣️ | اسم کاربر: NAME
⚡️ | نام کاربری: @USERNAME
💰 | مبلغ: PRICE تومان
🔮 | نام سرویس: REMARK
📋 | سفارش: FILENAME
",
    'renew_order_sent'=>"✅ | درخواست تمدید شما با موفقیت ثبت شد. پس از بررسی و تایید، نتیجه به شما اطلاع داده خواهد شد.",
'renew_account_request_message'=>"
♻️ | درخواست تمدید سرویس (TYPE)

▫️ | آیدی کاربر: <code>USER-ID</code>
👨‍💼 | اسم کاربر: NAME
⚡️ | نام کاربری: @USERNAME
💰 | مبلغ: PRICE تومان
✏️ | نام سرویس: REMARK
🔋 | حجم جدید: VOLUME گیگ
⏰ | مدت جدید: DAYS روز
",
'increase_account_request_message'=>"
➕ | درخواست افزایش سرویس (TYPE)

▫️ | آیدی کاربر: <code>USER-ID</code>
👨‍💼 | اسم کاربر: NAME
⚡️ | نام کاربری: @USERNAME
✏️ | نام سرویس: REMARK
🔋 | افزایش TYPE: به مقدار INCREASE گیگ/روز
💰 | قیمت: PRICE تومان
",
    'waiting_message'=>'⏳ | لطفا کمی صبر کنید...',
    'join_channel_message'=>"
برای استفاده از ربات، باید به کانال زیر بپیوندید:
    
✅ | لطفا ابتدا در کانال زیر عضو شوید و سپس دکمه «عضو شدم» را بزنید:
",
    'bot_is_updating'=> "⚙️ | ربات در حال به‌روزرسانی است. لطفا چند دقیقه دیگر دوباره تلاش کنید.",
    'select_one_to_show_detail'=> '👇 | یکی از سرویس‌های فعال خود را جهت مشاهده جزئیات انتخاب کنید:',
    'you_dont_have_config'=>'🙁 | شما در حال حاضر هیچ کانفیگ فعالی ندارید.',
    'no_order_found'=> "🤷‍♂️ | موردی یافت نشد.",
    'config_details_message'=>"
✅ | وضعیت کانفیگ: STATE
    
🔮 | نام کانفیگ: NAME

🔗 | لینک اتصال:
<code>CONNECT-LINK</code>

📋 | لینک سابسکریپشن:
<code>SUB-LINK</code>
",
    'please_wait_message'=>"⏳ | در حال پردازش، لطفا منتظر باشید...",
    'send_only_number'=> "🔢 | لطفا فقط عدد ارسال کنید.",
    'change_bot_settings_message'=>'⚙️ | از این بخش می‌توانید امکانات ربات را مدیریت کنید. (روشن/خاموش)',
    'saved_successfuly'=>"✅ | تغییرات با موفقیت ذخیره شد.",
    'invited_user_joined_message'=>"🎉 | تبریک! یک کاربر جدید با لینک دعوت شما به ربات پیوست.",
    'please_select_from_below_buttons'=>"👇 | لطفا از دکمه‌های زیر استفاده کنید.",
    'use_iranian_number_only'=>"🇮🇷 | لطفا فقط از شماره‌های ایران استفاده کنید.",
    'phone_confirmed'=>"✅ | شماره تماس شما با موفقیت تأیید شد.",
    'send_your_phone_number'=>"سلام! برای استفاده از امکانات ربات، لطفا با استفاده از دکمه زیر شماره تماس خود را ارسال کنید 👇",
    'start_message'=>'
سلام و درود، به ربات ™Elitedev .خوش آمدید 🫡🌻
    
با خدمات و سرویس های ما میتونید شبکه جهانی اینترنت رو زیر و رو کنید 🛜

✅ | سرور ها با پهنای باند 10 Gbps
📡 | تضمین 100% امنیت شما
🎧 | پشتیبانی اختصاصی
🕹️ | سرویس های پرسرعت وایرگارد مخصوص گیمر ها

📞 | آیدی پشتیبان: @MrElite7
📣 | کانال تلگرام: @EliteDevTeam
',
    'new_member_joined'=>"
🎉 | یک کاربر جدید به ربات پیوست:

👤 | نام: FULLNAME
🆔 | یوزرنیم: @USERNAME
🔢 | آیدی عددی: <code>USERID</code>
",
    "not_joine_yet"=>"❌ | شما هنوز در کانال عضو نشده‌اید. لطفا ابتدا عضو شوید.",
    'insert_discount_code'=>"🎁 | اگر کد تخفیف دارید، آن را وارد کنید:",
    "not_valid_discount_code"=>"😔 | کد تخفیف وارد شده معتبر نیست.",
    'valid_discount_code'=>"✅ | کد تخفیف با موفقیت اعمال شد.
مبلغ تخفیف: AMOUNT تومان",
'used_discount_code'=>"
🎁 | گزارش استفاده از کد تخفیف

👤 | کاربر: NAME (@USERNAME)
🔢 | آیدی: <code>USERID</code>
🏷️ | کد تخفیف: DISCOUNTCODE
💰 | مبلغ تخفیف: AMOUNT تومان
",
"send_config_uuid"=>"🔍 | برای دریافت اطلاعات کانفیگ، لطفا لینک یا UUID آن را ارسال کنید.",
'not_correct_text'=>"❌ | متن وارد شده معتبر نمی‌باشد.",
'receving_information'=>"⏳ | در حال دریافت جزئیات...",
'request_agency_message'=>"
🤝 | درخواست نمایندگی

👤 | کاربر: NAME (@USERNAME)
🔢 | آیدی: <code>USERID</code>
",
    'agency_request_sent'=>"✅ | درخواست شما برای دریافت پنل همکاری با موفقیت ارسال شد و در صف بررسی قرار گرفت.",
    'agency_request_already_sent'=>"ℹ️ | شما قبلاً یک درخواست ارسال کرده‌اید. لطفا منتظر پاسخ بمانید.",
    'agency_request_declined'=>"😔 | متاسفانه درخواست شما برای نمایندگی رد شد.",
    'agency_request_approved'=>"🎉 | تبریک! درخواست شما برای نمایندگی تأیید شد.",
    'send_agent_discount_percent' =>"💯 | لطفا درصد تخفیف نماینده را به صورت عدد وارد کنید (مثلاً: 10).",
    'agent_setting_message' =>"
 پنل همکاری 🤝 | نماینده محترم،

از این بخش می‌توانید به صورت تکی یا انبوه خرید کنید و کانفیگ‌های خود را مدیریت نمایید.
",
    'selling_is_off'=>"🔴 | فروش در حال حاضر متوقف شده است. لطفا بعداً مراجعه کنید.",
    'no_server_available'=>"😔 | در حال حاضر هیچ سرور فعالی برای ارائه وجود ندارد.",
    'buy_sub_select_location' => '1️⃣ | مرحله اول: لطفا لوکیشن مورد نظر خود را انتخاب کنید:',
    'the_bot_in_not_admin' => "❌ | ربات در کانال ادمین نیست. لطفا ابتدا ربات را در کانال مورد نظر ادمین کنید.",
    'category_not_avilable'=>"🤷‍♂️ | هیچ دسته‌بندی برای این سرور تعریف نشده است.",
    'receive_categories'=>"⏳ | در حال دریافت لیست دسته‌بندی‌ها...",
    'buy_sub_select_category'=> "2️⃣ | مرحله دوم: لطفا دسته‌بندی مورد نظر خود را انتخاب کنید:",
    'no_plan_available'=>"ℹ️ | در حال حاضر هیچ پلنی در این دسته‌بندی وجود ندارد.",
    'receive_plans'=>"⏳ | در حال دریافت لیست پلن‌ها...",
    'buy_sub_select_plan'=> "3️⃣ | مرحله سوم: لطفا یکی از پلن‌ها را انتخاب کنید:", 
    'buy_custom_plan'=>'➕ | خرید پلن با حجم و زمان دلخواه',
    'select_one_plan_to_edit'=>"✍️ | پلنی که قصد ویرایش آن را دارید انتخاب کنید:", 
    'enter_account_amount' => "🔢 | لطفا تعداد اکانت مورد نیاز خود را وارد کنید (حداکثر 6 عدد):",
    'send_positive_number'=>"⚠️ | لطفا یک عدد بزرگتر از صفر وارد کنید.",
    'buy_subscription_detail'=>"
📋 | جزئیات سفارش

〽️ | نام پلن: PLAN-NAME
💎 | قیمت: PRICE تومان
📝 | توضیحات:
DESCRIPTION
",
    'buy_much_subscription_detail'=>"
📋 | جزئیات سفارش انبوه

〽️ | نام پلن: PLAN-NAME
#️⃣ | تعداد: ACCOUNT-COUNT
💎 | قیمت کل: TOTAL-PRICE تومان
📝 | توضیحات:
DESCRIPTION
",
    'buy_custom_subscription_detail'=>"
📋 | جزئیات سفارش دلخواه

〽️ | نام پلن: PLAN-NAME
🔋 | حجم: VOLUME گیگابایت
⏰ | مدت: DAYS روز
💎 | قیمت: PRICE تومان
📝 | توضیحات:
DESCRIPTION
",
    "agents_list" => "
👥 | لیست نمایندگان

برای مشاهده آمار فروش و مدیریت نماینده، روی نام او کلیک کنید.
",
    'agent_deleted_successfuly'=>"✅ | نمایندگی با موفقیت حذف شد.",
    'agent_details'=>'
📊 | آمار نماینده: AGENT-NAME

سمت راست: درآمد | سمت چپ: تعداد خرید
',
    'send_config_remark'=>"✏️ | لطفا نام دلخواه کانفیگ را وارد کنید (فقط حروف انگلیسی و اعداد).",
    'forward_your_message'=>"↪️ | لطفا پیام مورد نظر خود را به ربات فروارد کنید.",
    "enter_ticket_title"=>"✉️ | لطفا موضوع تیکت خود را به صورت کوتاه ارسال کنید.",
    "enter_ticket_description"=> "💬 | لطفا متن کامل درخواست خود را (همراه با عکس در صورت نیاز) ارسال کنید.",
    "sent_config_to_user"=> '
✅ | کانفیگ با موفقیت برای کاربر ارسال شد:
🔸 | نام: REMARK
🔸 | حجم: VOLUME گیگ
🔸 | مدت: DAYS روز
',
    "renewed_config_to_user"=> '
✅ | کانفیگ با موفقیت برای کاربر تمدید شد:
🔸 | نام: REMARK
🔸 | حجم جدید: VOLUME گیگ
🔸 | مدت جدید: DAYS روز
',
    'sending_config_to_user'=>'🚀 | در حال ساخت و ارسال کانفیگ برای مشتری...',
    'config_not_found'=>"❌ | کانفیگ مورد نظر یافت نشد. لطفا مجددا تلاش کنید.",
    'incorrect_config_name'=>"⚠️ | نام وارد شده معتبر نیست. (فقط حروف انگلیسی و اعداد)",
    'pay_with_tron_wallet'=>"
🪙 | جهت پرداخت با ترون، لطفا معادل AMOUNT واحد را به آدرس زیر واریز کرده و سپس هش تراکنش (TxID) را ارسال کنید:

<code>TRON-WALLET</code>
",
    'incorrect_tax_id'=>"❌ | هش تراکنش (TxID) وارد شده نامعتبر است.",
    'used_tax_id'=>"⚠️ | این هش تراکنش قبلاً استفاده شده است.",
    'in_review_tax_id'=>"✅ | تراکنش شما با موفقیت ثبت شد و در صف بررسی قرار گرفت.",
    'user_taxid_rejected'=>"
🔴 | تراکنش ناموفق (TYPE)

- کاربر: NAME (@USERNAME)
- آیدی: <code>USERID</code>
- هش تراکنش: <code>TAXID</code>

علت: تراکنش پس از 5 بار تلاش، تأیید نشد.
",
    'your_taxid_rejected'=>"
🔴 | تراکنش شما (TYPE) با هش زیر ناموفق بود:
<code>TAXID</code>

علت: تراکنش پس از 5 بار تلاش، تأیید نشد.
",
    'incorrect_user_taxid_rejected'=>"
🔴 | تراکنش ناموفق (TYPE)

- کاربر: NAME (@USERNAME)
- آیدی: <code>USERID</code>
- هش تراکنش: <code>TAXID</code>

علت: ثبت تراکنش نادرست.
",
    'your_incorrect_taxid_rejected'=>"
🔴 | تراکنش شما (TYPE) با هش زیر رد شد:
<code>TAXID</code>

علت: ثبت تراکنش نادرست.
",
    'partially_paid_user_taxid'=>"
🔴 | تراکنش ناموفق (TYPE)

- کاربر: NAME (@USERNAME)
- آیدی: <code>USERID</code>
- هش تراکنش: <code>TAXID</code>

علت: عدم تطابق مبلغ واریزی.
",
    'you_have_partially_paid'=>"
🔴 | تراکنش شما (TYPE) با هش زیر رد شد:
<code>TAXID</code>

علت: عدم تطابق مبلغ واریزی.
",
    'agent_discount_settings'=>"
💯 | مدیریت تخفیف‌های نماینده: AGENT-NAME
",
    'config_doesnt_exist'=>"❌ | کانفیگی با این مشخصات یافت نشد."
];

$buttonValues = [
    'bot_reports'=>"📉 آمار ربات",
    'message_to_user'=>"💬 ارسال پیام به کاربر",
    'user_reports'=>"👤 اطلاعات کاربر",
    'admins_list'=>"🛡️ لیست ادمین‌ها",
    'increase_wallet'=>"➕💵 افزایش موجودی",
    'decrease_wallet'=>"➖💵 کاهش موجودی",
    'create_account'=>"➕👥 ساخت اکانت",
    'ban_user'=>"🚫 مسدود کردن",
    'unban_user'=>"✅ رفع مسدودی",
    'server_settings'=>'🖥️ مدیریت سرورها',
    'categories_settings'=>'🗂️ مدیریت دسته‌بندی‌ها',
    'plan_settings'=>'📦 مدیریت پلن‌ها',
    'discount_settings'=>"🎁 مدیریت تخفیف‌ها",
    'main_button_settings'=>"🕹️ مدیریت دکمه‌ها",
    'gateways_settings'=>'💳 تنظیمات درگاه',
    'bot_settings'=>'⚙️ تنظیمات ربات',
    'tickets_list'=>'📩 لیست تیکت‌ها',
    'message_to_all'=>"📢 ارسال همگانی",
    'forward_to_all'=>"↪️ فروارد همگانی",
    'back_to_main'=>'🏠 منوی اصلی',  
    'cart_to_cart'=>"💳 کارت به کارت",
    'now_payment_gateway'=>"💳 درگاه NowPayments",
    'zarinpal_gateway'=> "💳 درگاه زرین‌پال",
    'nextpay_gateway'=>"💳 درگاه نکست‌پی",
    'weswap_gateway'=>"💳 درگاه ارزی/ریالی",
    'approve' => '✅ تایید',
    'approved' => '✅ تایید شد',
    'decline' => '❌ رد کردن',
    'declined' => '❌ رد شد',
    'back_button'=> "🔙 بازگشت",
    'renew_connection_link'=>"🔄 لینک جدید",
    'update_config_connection'=>"🔄 به‌روزرسانی",
    'increase_config_volume'=>"➕🔋 افزایش حجم",
    'increase_config_days'=>"➕🗓️ افزایش زمان",
    'renew_config'=>'♻️ تمدید سرویس',
    'change_config_location'=>'🌎 تغییر لوکیشن',
    'selected_protocol'=>"🚦 پروتکل",
    'volume_left'=>"🔋 حجم باقیمانده:",
    'expire_date'=>"🗓️ تاریخ انقضا:",
    'buy_date'=>"🛍️ تاریخ خرید:",
    'plan_name'=>"🚀 نام پلن:",
    'on'=>"🟢 روشن",
    'off'=>"🔴 خاموش",
    'active'=>"🟢 فعال",
    'deactive'=>"🔴 غیرفعال",
    'send_phone_number'=>'📱 ارسال شماره تماس',
    'send_message_to_user'=>"✉️ ارسال پیام",
    'cancel' => '🚫 انصراف',
    'join_channel'=>"📣 عضویت در کانال",
    'have_joined'=>"✅ عضو شدم",
    'gift_volume_day'=>"🎁 هدیه (حجم/زمان)",
    'test_account'=>"🧪 دریافت اکانت تست",
    'invite_friends'=>"🏆 دعوت از دوستان",
    'my_info'=>"👤 حساب کاربری",
    'my_subscriptions'=>'📲 کانفیگ‌های من',
    'buy_subscriptions'=>'🛍️ خرید سرویس جدید',
    'shared_existence'=>"🏦 موجودی اشتراکی",
    'individual_existence'=>"💰 موجودی اختصاصی",
    'application_links'=>'📱 آموزش اتصال',
    'my_tickets'=>"📩 تیکت‌های من",
    'search_config'=>"🔍 اطلاعات کانفیگ",
    'delete_config'=>"🗑️ حذف کانفیگ",
    'pay_with_wallet' => "💰 پرداخت با کیف پول",
    'request_agency' =>"🤝 درخواست همکاری",
    'agency_setting' =>"💼 پنل همکاری",
    'agent_one_buy'=>"➕ خرید تکی",
    'agent_much_buy'=>"➕👥 خرید انبوه",
    'agent_bought_accounts'=>"تعداد خرید",
    'agent_joined_date'=>"تاریخ عضویت",
    'agent_agency_date'=>"تاریخ نمایندگی",
    "agent_list"=>"👥 مدیریت نمایندگان",
    'search_agent_config'=>"🔍 جستجوی کانفیگ",
    'search_admin_config'=>"🔍 جستجوی کانفیگ کاربر",
    'sharj'=>"💳 شارژ کیف پول",
    "qr_config"=>"🔳 QR کانفیگ",
    "qr_sub"=>"🔳 QR سابسکریپشن",
    'start_bot'=>"▶️ شروع ربات",
    'enable_config'=>"🟢 فعال‌سازی",
    'disable_config'=>"🔴 غیرفعال‌سازی",
    "tron_gateway"=>"🪙 درگاه ترون",
    'plan_discount'=>"روی پلن 📦",
    'server_discount'=>"روی سرور 🖥️"
];
?>
