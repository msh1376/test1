<?php
header("Content-type: application/json; charset=utf-8");

$content = '{
  "add": {
    "idea": {
      "title": "ثبت ایده",
      "available": true,
      "description": "کاربر گرامی، در صورتی که ایده شما به مرحله اجرایی نرسیده، لطفا تعداد کاربران و فالوئرها را برابر با صفر قرار دهید",
      "items": [
        {
          "label": "عنوان طرح",
          "type": "regular",
          "placeholder": "عنوان طرح را وارد کنید",
          "key": "title",
          "value": "",
          "error": ""
        },
        {
          "label": "نام تیم",
          "type": "regular",
          "key": "teamName",
          "value": "",
          "error": "",
          "placeholder": "نام تیم را وارد کنید"
        },
        {
          "label": "آدرس وبسایت",
          "type": "regular",
          "key": "website",
          "value": "",
          "error": "",
          "placeholder": "آدرس وبسایت را به همراه www وارد کنید"
        },
        {
          "label": "شماره تماس",
          "type": "regular",
          "key": "phoneNumber",
          "value": "",
          "inputType": "number",
          "error": "",
          "placeholder": "شماره تماس خود را با فرمت استاندارد وارد کنید (مثال: 09122122200)"
        },
        {
          "label": "مسئله محوری استارتاپ را توضیح دهید",
          "type": "textarea",
          "placeholder": "توضیحات",
          "key": "mainStartupDescription",
          "value": "",
          "error": ""
        },
        {
          "label": "راه حل شما برای این مسئله چیست؟",
          "type": "textarea",
          "placeholder": "",
          "key": "solution",
          "value": "",
          "error": ""
        },
        {
          "label": "ارزش حدودی خدمات شما برای هر مشتری (CLV) چقدر است؟",
          "type": "singleCheckboxSelect",
          "selectItems": [
            {
              "label": "زیر 500 هزار تومان",
              "value": "1"
            },
            {
              "label": "بین 0.5 تا دو میلیون تومان ",
              "value": "2"
            },
            {
              "label": "بین 2 تا 10 میلیون تومان",
              "value": "3"
            },
            {
              "label": "بین 10 تا 50 میلیون تومان",
              "value": "4"
            },
            {
              "label": "بین 50 تا 100 میلیون تومان",
              "value": "5"
            },
            {
              "label": "بین 100 تا 500 میلیون تومان",
              "value": "6"
            },
            {
              "label": "بیشتر از 500 میلیون تومان",
              "value": "7"
            }
          ],
          "placeholder": "",
          "key": "clv",
          "value": "",
          "error": ""
        },
        {
          "label": "اندازه بازار محصول شما چقدر است؟",
          "type": "singleCheckboxSelect",
          "selectItems": [
            {
              "label": "زیر 10 هزار",
              "value": "1"
            },
            {
              "label": "بین 10هزار تا 100هزار",
              "value": "2"
            },
            {
              "label": "بین 100هزار تا یک میلیون",
              "value": "3"
            },
            {
              "label": "بین یک میلیون تا 5 میلیون",
              "value": "4"
            },
            {
              "label": "بیشتر از 5 میلیون",
              "value": "5"
            }
          ],
          "placeholder": "",
          "key": "marketSize",
          "value": "",
          "error": ""
        },
        {
          "label": "هزینه جذب مشتری های شما (CPO) در حال حاضر چقدر است؟",
          "type": "singleCheckboxSelect",
          "selectItems": [
            {
              "label": "زیر 50 هزار تومان",
              "value": "10"
            },
            {
              "label": "بین 50 تا 100 هزار تومان",
              "value": "10"
            },
            {
              "label": "بین 100 هزار تا 500 هزار تومان",
              "value": "8"
            },
            {
              "label": "بین 500هزار تومان تا 2 میلیون تومان",
              "value": "6"
            },
            {
              "label": "بین 2میلیون تومان تا 10 میلیون تومان",
              "value": "4"
            },
            {
              "label": "بیشتر از 10 میلیون تومان",
              "value": "2"
            }
          ],
          "placeholder": "",
          "key": "cpo",
          "value": "",
          "error": ""
        },
        {
          "label": "تعداد مشتریان شما چقدر است؟",
          "type": "singleCheckboxSelect",
          "selectItems": [
            {
              "label": " مشتری نداریم (در صورتی که ایده شما به مرحله اجرایی نرسیده این گزینه را انتخاب کنید.)",
              "value": "0"
            },
            {
              "label": "زیر 100",
              "value": "1"
            },
            {
              "label": "بین 100 تا 1000",
              "value": "5"
            },
            {
              "label": "بین 1000 تا 10 هزار",
              "value": "10"
            },
            {
              "label": "بین 10 هزار تا 100هزار",
              "value": "15"
            },
            {
              "label": "بین 100 هزار تا یک میلیون",
              "value": "20"
            },
            {
              "label": "بین 1 میلیون تا 10 میلیون",
              "value": "25"
            },
            {
              "label": "بیشتر از 10 میلیون",
              "value": "30"
            }
          ],
          "placeholder": "",
          "key": "customersNumber",
          "value": "",
          "error": ""
        },
        {
          "label": "بیزینس مدل محصول شما چیست؟",
          "type": "textarea",
          "placeholder": "توضیحات",
          "key": "businessModel",
          "value": "",
          "error": ""
        },
        {
          "label": "استراتژی بازاریابی شما چیست؟",
          "type": "textarea",
          "placeholder": "توضیحات",
          "key": "marketingStrategy",
          "value": "",
          "error": ""
        },
        {
          "label": "کانال های بازاریابی شما چیست؟",
          "type": "multiCheckboxSelect",
          "selectItems": [
            {
              "label": "بازاریابی آنلاین – سایت و موتورهای جست و جو",
              "value": "بازاریابی آنلاین – سایت و موتورهای جست و جو"
            },
            {
              "label": "بازاریابی آنلاین – شبکه های اجتماعی",
              "value": "بازاریابی آنلاین – شبکه های اجتماعی"
            },
            {
              "label": "بازاریابی آنلاین – سایر",
              "value": "بازاریابی آنلاین – سایر"
            },
            {
              "label": "بازاریابی فیزیکی (ویزیتور)",
              "value": "بازاریابی فیزیکی (ویزیتور)"
            },
            {
              "label": "صدا و سیما",
              "value": "صدا و سیما"
            },
            {
              "label": "بازاریابی در سازمان ها و ارگان های خصوصی و دولتی",
              "value": "بازاریابی در سازمان ها و ارگان های خصوصی و دولتی"
            },
            {
              "label": "فروشگاه فیزیکی",
              "value": "فروشگاه فیزیکی"
            },
            {
              "label": "تبلیغات محیطی",
              "value": "تبلیغات محیطی"
            }
          ],
          "placeholder": "",
          "key": "marketingChannels",
          "value": "",
          "error": ""
        },
        {
          "label": "سایت شما، ماهانه چه تعداد بازدید دارد؟",
          "type": "singleCheckboxSelect",
          "selectItems": [
            {
              "label": "کمتر از 1000",
              "value": "1"
            },
            {
              "label": "بین 1000 تا 5000",
              "value": "2"
            },
            {
              "label": "بین 5000 تا 10 هزار",
              "value": "5"
            },
            {
              "label": "بین 10هزار تا 50هزار",
              "value": "8"
            },
            {
              "label": "بیشتر از 50هزار",
              "value": "10"
            }
          ],
          "placeholder": "",
          "key": "monthlySiteVisit",
          "value": "",
          "error": ""
        },
        {
          "label": "تعداد فالورهای شما در شبکه های اجتماعی چقدر است؟",
          "type": "singleCheckboxSelect",
          "selectItems": [
            {
              "label": "فالور نداریم (در صورتی که ایده شما به مرحله اجرایی نرسیده این گزینه را انتخاب کنید.)",
              "value": "0"
            },
            {
              "label": "زیر 1000",
              "value": "1"
            },
            {
              "label": "بین 1000 تا 10000",
              "value": "2"
            },
            {
              "label": "بین 10000 تا 50هزار",
              "value": "5"
            },
            {
              "label": "بین 50هزار تا 100هزار",
              "value": "8"
            },
            {
              "label": "بیشتر از 500هزار",
              "value": "10"
            }
          ],
          "placeholder": "",
          "key": "socialMediaFollowers",
          "value": "",
          "error": ""
        },
        {
          "label": "تعداد نصب اپلیکیشن شما چقدر است؟",
          "type": "singleCheckboxSelect",
          "selectItems": [
            {
              "label": "اپلیکیشن نداریم",
              "value": "0"
            },
            {
              "label": "زیر 1000",
              "value": "5"
            },
            {
              "label": "بین 1000 تا 10000",
              "value": "6"
            },
            {
              "label": "بین 10 هزار تا 50 هزار",
              "value": "7"
            },
            {
              "label": "بین 50هزار تا 100هزار",
              "value": "8"
            },
            {
              "label": "بین 100هزار تا 500هزار",
              "value": "9"
            },
            {
              "label": "بیشتر از 500 هزار",
              "value": "10"
            }
          ],
          "placeholder": "",
          "key": "appInstallationNumber",
          "value": "",
          "error": ""
        },
        {
          "label": "کانورژن خرید مشتری ( نسبت خرید به بازدید) چقدر است؟",
          "type": "singleCheckboxSelect",
          "selectItems": [
            {
              "label": "زیر 0.5٪",
              "value": "-"
            },
            {
              "label": "بین 0.5 تا 1٪",
              "value": "-"
            },
            {
              "label": "بین 1 تا 2٪",
              "value": "-"
            },
            {
              "label": "بین 2 تا 3٪",
              "value": "-"
            },
            {
              "label": "بین 3 تا 4٪",
              "value": "-"
            },
            {
              "label": "بین 4 تا 5٪",
              "value": "-"
            },
            {
              "label": "بین 5 تا 10٪",
              "value": "-"
            },
            {
              "label": "بیشتر از 10٪",
              "value": "-"
            }
          ],
          "placeholder": "",
          "key": "conversion",
          "value": "",
          "error": ""
        },
        {
          "label": "رقبا و مزیت رقابتی کسب و کار شما چیست؟",
          "type": "textarea",
          "placeholder": "توضیحات",
          "key": "competitors",
          "value": "",
          "error": ""
        },
        {
          "label": "تعداد اعضای تیم",
          "type": "singleCheckboxSelect",
          "selectItems": [
            {
              "label": "1 نفر",
              "value": "1"
            },
            {
              "label": "2 تا 4 نفر",
              "value": "2"
            },
            {
              "label": "4 تا 7 نفر",
              "value": "3"
            },
            {
              "label": "7 تا 15 نفر",
              "value": "4"
            },
            {
              "label": "بیش از 15 ",
              "value": "5"
            }
          ],
          "placeholder": "",
          "key": "teamMembersQuantity",
          "value": "",
          "error": ""
        },
        {
          "label": "تخصص هریک از افراد تیم را توضیح دهید",
          "type": "textarea",
          "placeholder": "توضیحات",
          "key": "teamMembersExperience",
          "value": "",
          "error": ""
        },
        {
          "label": "نحوه توزیع سهام بین هریک از سهامداران",
          "type": "textarea",
          "placeholder": "توضیحات",
          "key": "distributeShares",
          "value": "",
          "error": ""
        },
        {
          "label": "نمودار درامد و هزینه سال جاری",
          "type": "textarea",
          "placeholder": "در صورت نیاز، می توانید علاوه بر توضیحات، فایل زیپ خود را اضافه کنید.",
          "key": "incomeAndExpenseChart",
          "value": "",
          "error": ""
        },
        {
          "label": "آپلود فایل زیپ",
          "type": "file",
          "placeholder": "توضیحات",
          "key": "incomeAndExpenseChartFile",
          "value": "",
          "error": "",
          "required": false,
          "acceptType": ".zip"
        },
        {
          "label": "میزان سرمایه مورد نیاز و پیشنهاد مشخص",
          "type": "textarea",
          "placeholder": "توضیحات",
          "key": "requiredCapital",
          "value": "",
          "error": ""
        },
        {
          "label": "استفاده از سرمایه در توسعه کسب و کار",
          "type": "multiCheckboxSelect",
          "selectItems": [
            {
              "label": "تولید توسعه محصول",
              "value": "-"
            },
            {
              "label": "توسعه بازار و بازاریابی",
              "value": "-"
            },
            {
              "label": "استخدام منابع‌انسانی",
              "value": "-"
            },
            {
              "label": "سایر",
              "value": "-"
            }
          ],
          "placeholder": "",
          "key": "capitalUsage",
          "value": "",
          "error": ""
        },
        {
          "label": "سهام باقی مانده در مالکیت بنیان گذاران",
          "type": "singleCheckboxSelect",
          "selectItems": [
            {
              "label": "کمتر از 5%",
              "value": "0"
            },
            {
              "label": "بین 5 تا 10%",
              "value": "1"
            },
            {
              "label": "بین 10 تا 20%",
              "value": "2"
            },
            {
              "label": "بین 20 تا 30%",
              "value": "3"
            },
            {
              "label": "بین 30 تا 50%",
              "value": "5"
            },
            {
              "label": "بیش از 50%",
              "value": "6"
            }
          ],
          "placeholder": "",
          "key": "foundersRemainingShare",
          "value": "",
          "error": ""
        },
        {
          "label": "پیش بینی از نقطه سر به سر هزینه درآمد",
          "type": "singleCheckboxSelect",
          "selectItems": [
            {
              "label": "کمتر از6 ماه ",
              "value": "6"
            },
            {
              "label": "بین 6 ماه تا 1 سال",
              "value": "5"
            },
            {
              "label": "بین 1 تا 2 سال",
              "value": "4"
            },
            {
              "label": "بین 2 تا 3 سال",
              "value": "3"
            },
            {
              "label": "بین 3 تا 5 سال ",
              "value": "2"
            },
            {
              "label": "بیش از 5 سال ",
              "value": "1"
            }
          ],
          "placeholder": "",
          "key": "revenueCostForecasting",
          "value": "",
          "error": ""
        },
        {
          "label": "آیا مجوزی برای فعالیت دارید؟",
          "type": "singleCheckboxSelect",
          "selectItems": [
            {
              "label": "بله",
              "value": "3"
            },
            {
              "label": "خیر",
              "value": "0"
            }
          ],
          "placeholder": "",
          "key": "hasLicense",
          "value": "",
          "error": ""
        }
      ]
    },
    "requirement": {
      "title": "ثبت نیاز",
      "available": true,
      "items": [
        {
          "label": "عنوان نیاز",
          "type": "regular",
          "key": "title",
          "value": "",
          "error": "",
          "placeholder": "عنوان نیاز را وارد کنید"
        },
        {
          "label": "شرح نیاز",
          "type": "textarea",
          "key": "description",
          "value": "",
          "error": "",
          "placeholder": "توضیحات"
        },
        {
          "label": "اهداف و انتظارات از راه‌حل پیشنهادی",
          "type": "textarea",
          "key": "targets",
          "value": "",
          "error": "",
          "placeholder": "توضیحات"
        },
        {
          "label": "استانداردها و تاییده‌های لازم",
          "type": "textarea",
          "key": "standards",
          "value": "",
          "error": "",
          "placeholder": "توضیحات"
        }
      ]
    },
    "startup": {
      "title": "ثبت داده های استارتاپ",
      "available": false
    },
    "resume": {
      "title": "رزومه ساز",
      "available": true,
      "items": [
        {
          "sectionTitle": "",
          "sectionKey": "general",
          "children": [
            {
              "label": "+ آپلود عکس",
              "preInputLabel": "",
              "type": "image",
              "key": "generalImage",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "",
              "required": false,
              "enabled": true,
              "containerWidth": "150px",
              "childrenWidth": "96%"
            },
            {
              "label": "",
              "type": "parent",
              "key": "generalInfo",
              "children": [
                {
                  "label": "نام و نام خانوادگی",
                  "preInputLabel": "",
                  "type": "regular",
                  "key": "fullName",
                  "selectType": "",
                  "value": "",
                  "error": "",
                  "defaultValue": "",
                  "placeholder": "نام و نام خانوادگی خود را وارد کنید",
                  "required": true,
                  "enabled": true,
                  "containerWidth": "100%",
                  "childrenWidth": "100%"
                },
                {
                  "label": "عنوان شغلی",
                  "preInputLabel": "",
                  "type": "regular",
                  "key": "generalJobTitle",
                  "selectType": "",
                  "value": "",
                  "error": "",
                  "defaultValue": "",
                  "placeholder": "عنوان شغلی خود را وارد کنید",
                  "required": true,
                  "enabled": true,
                  "containerWidth": "100%",
                  "childrenWidth": "100%"
                },
                {
                  "label": "وضعیت اشتغال",
                  "preInputLabel": "",
                  "type": "select",
                  "key": "employmentStatus",
                  "selectType": "checkboxListSingleSelect",
                  "value": "",
                  "error": "",
                  "defaultValue": [
                    {
                      "label": "جویای کار",
                      "value": "seeker",
                      "isSelected": true
                    },
                    {
                      "label": "به دنبال شغل بهتر",
                      "value": "looking",
                      "isSelected": false
                    },
                    {
                      "label": "شاغل",
                      "value": "employed",
                      "isSelected": false
                    }
                  ],
                  "placeholder": "",
                  "required": true,
                  "enabled": true,
                  "containerWidth": "100%",
                  "childrenWidth": "100%"
                }
              ],
              "containerWidth": "calc(100% - 150px)",
              "childrenWidth": "96%"
            }
          ]
        },
        {
          "sectionTitle": "اطلاعات فردی",
          "sectionKey": "personalInfo",
          "children": [
            {
              "label": "آدرس ایمیل",
              "preInputLabel": "",
              "type": "regular",
              "key": "email",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "آدرس ایمیل خود را وارد کنید",
              "required": true,
              "enabled": true,
              "containerWidth": "50%",
              "childrenWidth": "96%"
            },
            {
              "label": "شماره موبایل",
              "preInputLabel": "",
              "type": "regular",
              "key": "phoneNumber",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "شماره موبایل خود را وارد کنید",
              "required": true,
              "enabled": true,
              "containerWidth": "50%",
              "childrenWidth": "96%"
            },
            {
              "label": "استان محل سکونت",
              "preInputLabel": "",
              "type": "select",
              "key": "residenceState",
              "selectType": "list",
              "value": "",
              "error": "",
              "defaultValue": [
                {
                  "label": "تهران",
                  "value": "tehran",
                  "isSelected": true
                },
                {
                  "label": "لرستان",
                  "value": "lorestan",
                  "isSelected": false
                },
                {
                  "label": "زنجان",
                  "value": "zanjan",
                  "isSelected": false
                }
              ],
              "placeholder": "استان محل سکونت خود را انتخاب کنید",
              "required": true,
              "enabled": true,
              "containerWidth": "50%",
              "childrenWidth": "96%"
            },
            {
              "label": "آدرس محل سکونت",
              "preInputLabel": "",
              "type": "regular",
              "key": "residenceAddress",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "آدرس محل سکونت خود را وارد کنید",
              "required": false,
              "enabled": true,
              "containerWidth": "50%",
              "childrenWidth": "96%"
            },
            {
              "label": "وضعیت تاهل",
              "preInputLabel": "",
              "type": "select",
              "key": "maritalStatus",
              "selectType": "checkboxListSingleSelect",
              "value": "",
              "error": "",
              "defaultValue": [
                {
                  "label": "مجرد",
                  "value": "single",
                  "isSelected": true
                },
                {
                  "label": "متاهل",
                  "value": "married",
                  "isSelected": false
                }
              ],
              "placeholder": "",
              "required": true,
              "enabled": true,
              "containerWidth": "50%",
              "childrenWidth": "96%"
            },
            {
              "label": "سال تولد",
              "preInputLabel": "",
              "type": "regular",
              "key": "birthYear",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "سال تولد خود را وارد کنید",
              "required": true,
              "enabled": true,
              "containerWidth": "50%",
              "childrenWidth": "96%"
            },
            {
              "label": "چنسیت",
              "preInputLabel": "",
              "type": "select",
              "key": "gender",
              "selectType": "checkboxListSingleSelect",
              "value": "",
              "error": "",
              "defaultValue": [
                {
                  "label": "زن",
                  "value": "woman",
                  "isSelected": true
                },
                {
                  "label": "مرد",
                  "value": "male",
                  "isSelected": false
                }
              ],
              "placeholder": "",
              "required": true,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "48%"
            }
          ]
        },
        {
          "sectionTitle": "درباره من",
          "sectionKey": "about",
          "children": [
            {
              "label": "",
              "preInputLabel": "",
              "type": "textarea",
              "key": "about",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "متنی درباره‌ی ویژگی‌های شخصیتی و حرفه‌ای خود بنویسید.",
              "placeholder": "از شخصیت و ویژگی های حرفه ای و شخصی خود بنویسید",
              "required": false,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            }
          ]
        },
        {
          "sectionTitle": "مهارت های حرفه ای",
          "sectionKey": "hardSkillsSection",
          "children": [
            {
              "label": "برای تغییر ترتیب آیتم‌ها را کشیده و جابجا کنید.",
              "type": "select",
              "key": "hardSkills",
              "selectType": "searchAndListWithAddCustom",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "مهارت شما...",
              "required": true,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            }
          ]
        },
        {
          "sectionTitle": "سوابق شغلی",
          "sectionKey": "workExperiences",
          "children": [
            [
              {
                "label": "عنوان شغلی(سمت)",
                "preInputLabel": "",
                "type": "regular",
                "key": "jobTitle",
                "selectType": "",
                "value": "",
                "error": "",
                "defaultValue": "",
                "placeholder": "عنوان شغلی را وارد کنید",
                "required": true,
                "enabled": true,
                "containerWidth": "50%",
                "childrenWidth": "96%"
              },
              {
                "label": "نام شرکت",
                "preInputLabel": "",
                "type": "regular",
                "key": "company",
                "selectType": "",
                "value": "",
                "error": "",
                "defaultValue": "",
                "placeholder": "نام شرکت را وارد کنید",
                "required": true,
                "enabled": true,
                "containerWidth": "50%",
                "childrenWidth": "96%"
              },
              {
                "label": "تاریخ اشتغال",
                "type": "parent",
                "key": "employmentDate",
                "children": [
                  {
                    "label": "",
                    "preInputLabel": "از",
                    "type": "select",
                    "key": "employedFromMonth",
                    "selectType": "list",
                    "value": "",
                    "error": "",
                    "defaultValue": "",
                    "placeholder": "ماه شروع همکاری",
                    "required": true,
                    "enabled": true,
                    "containerWidth": "40%",
                    "childrenWidth": "90%"
                  },
                  {
                    "label": "",
                    "preInputLabel": "",
                    "type": "regular",
                    "key": "employedFromYear",
                    "selectType": "",
                    "value": "",
                    "error": "",
                    "defaultValue": "",
                    "placeholder": "سال شروع همکاری",
                    "required": true,
                    "enabled": true,
                    "containerWidth": "32%",
                    "childrenWidth": "100%"
                  },
                  {
                    "label": "",
                    "preInputLabel": "تا",
                    "type": "select",
                    "key": "employedToMonth",
                    "selectType": "list",
                    "value": "",
                    "error": "",
                    "defaultValue": "",
                    "placeholder": "ماه پایان همکاری",
                    "required": true,
                    "enabled": false,
                    "containerWidth": "40%",
                    "childrenWidth": "90%"
                  },
                  {
                    "label": "",
                    "preInputLabel": "",
                    "type": "regular",
                    "key": "employedToYear",
                    "selectType": "",
                    "value": "",
                    "error": "",
                    "defaultValue": "",
                    "placeholder": "سال پایان همکاری",
                    "required": true,
                    "enabled": false,
                    "containerWidth": "32%",
                    "childrenWidth": "100%"
                  },
                  {
                    "label": "هنوز مشغولم",
                    "preInputLabel": "",
                    "type": "checkbox",
                    "key": "isStillEmployed",
                    "selectType": "",
                    "value": "",
                    "error": "",
                    "defaultValue": true,
                    "placeholder": "",
                    "required": true,
                    "enabled": true,
                    "containerWidth": "20%",
                    "childrenWidth": "100%"
                  }
                ],
                "containerWidth": "100%",
                "childrenWidth": "100%"
              },
              {
                "label": "توضیحات",
                "preInputLabel": "",
                "type": "textarea",
                "key": "employmentDescription",
                "selectType": "",
                "value": "",
                "error": "",
                "defaultValue": "",
                "placeholder": "توضیحات خود را در اینجا وارد کنید.",
                "required": false,
                "enabled": true,
                "containerWidth": "100%",
                "childrenWidth": "100%"
              }
            ]
          ]
        },
        {
          "sectionTitle": "سوابق تحصیلی",
          "sectionKey": "educationalRecords",
          "children": [
            [
              {
                "label": "رشته تحصیلی",
                "preInputLabel": "",
                "type": "regular",
                "key": "studyField",
                "selectType": "",
                "value": "",
                "error": "",
                "defaultValue": "",
                "placeholder": "رشته خود را وارد کنید",
                "required": true,
                "enabled": true,
                "containerWidth": "50%",
                "childrenWidth": "96%"
              },
              {
                "label": "نام دانشگاه / موسسه آموزشی",
                "preInputLabel": "",
                "type": "regular",
                "key": "studyPlace",
                "selectType": "",
                "value": "",
                "error": "",
                "defaultValue": "",
                "placeholder": "نام دانشگاه / موسسه آموزشی را وارد کنید",
                "required": true,
                "enabled": true,
                "containerWidth": "50%",
                "childrenWidth": "96%"
              },
              {
                "label": "مقطع تحصیلی",
                "type": "select",
                "key": "degree",
                "selectType": "checkboxListSingleSelect",
                "value": "",
                "error": "",
                "defaultValue": [
                  {
                    "label": "دیپلم",
                    "value": "diploma",
                    "isSelected": true
                  },
                  {
                    "label": "کاردانی",
                    "value": "preLiscence",
                    "isSelected": false
                  },
                  {
                    "label": "کارشناسی",
                    "value": "liscence",
                    "isSelected": false
                  }
                ],
                "placeholder": "",
                "required": true,
                "enabled": true,
                "containerWidth": "100%",
                "childrenWidth": "100%"
              },
              {
                "label": "تاریخ شروع و پایان تحصیل",
                "type": "parent",
                "key": "studyDate",
                "children": [
                  {
                    "label": "",
                    "preInputLabel": "از سال",
                    "type": "regular",
                    "key": "studiedFromYear",
                    "selectType": "",
                    "value": "",
                    "error": "",
                    "defaultValue": "",
                    "placeholder": "سال شروع تحصیل",
                    "required": true,
                    "enabled": true,
                    "containerWidth": "51%",
                    "childrenWidth": "calc(90% - 48px)"
                  },
                  {
                    "label": "",
                    "preInputLabel": "تا سال",
                    "type": "regular",
                    "key": "studiedToYear",
                    "selectType": "",
                    "value": "",
                    "error": "",
                    "defaultValue": "",
                    "placeholder": "سال پایان تحصیل",
                    "required": true,
                    "enabled": true,
                    "containerWidth": "51%",
                    "childrenWidth": "calc(90% - 48px)"
                  },
                  {
                    "label": "هنوز مشغول به تحصیل هستم",
                    "type": "checkbox",
                    "key": "isStillStudying",
                    "selectType": "",
                    "value": "",
                    "error": "",
                    "defaultValue": false,
                    "placeholder": "",
                    "required": true,
                    "enabled": true,
                    "containerWidth": "30%",
                    "childrenWidth": "100%"
                  }
                ],
                "containerWidth": "100%",
                "childrenWidth": "100%"
              },
              {
                "label": "توضیحات",
                "type": "textarea",
                "key": "studyDescription",
                "selectType": "",
                "value": "",
                "error": "",
                "defaultValue": "",
                "placeholder": "توضیحات خود را در اینجا وارد کنید.",
                "required": false,
                "enabled": true,
                "containerWidth": "100%",
                "childrenWidth": "100%"
              }
            ]
          ]
        },
        {
          "sectionTitle": "زبان ها",
          "sectionKey": "languages",
          "children": [
            [
              {
                "label": "نام زبان",
                "type": "select",
                "key": "languageName",
                "selectType": "list",
                "value": "",
                "error": "",
                "defaultValue": "",
                "placeholder": "نام زبان را انتخاب کنید",
                "required": true,
                "enabled": true,
                "containerWidth": "50%",
                "childrenWidth": "96%"
              },
              {
                "label": "سطح تسلط",
                "type": "select",
                "key": "languageLevel",
                "selectType": "list",
                "value": "",
                "error": "",
                "defaultValue": "",
                "placeholder": "سطح تسلط را انتخاب کنید",
                "required": true,
                "enabled": true,
                "containerWidth": "50%",
                "childrenWidth": "96%"
              }
            ]
          ]
        },
        {
          "sectionTitle": "ترجیحات شغلی",
          "sectionKey": "careerPreferences",
          "children": [
            {
              "label": "استان های مورد نظر برای کار",
              "type": "select",
              "key": "stateToWork",
              "selectType": "searchAndList",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "مثلا تهران، قزوین و...",
              "required": true,
              "enabled": true,
              "containerWidth": "50%",
              "childrenWidth": "96%"
            },
            {
              "label": "دسته بندی شغلی و زمینه کاری",
              "type": "select",
              "key": "fieldOfWork",
              "selectType": "searchAndList",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "مثلا برنامه نویسی، مهندسی عمران یا...",
              "required": true,
              "enabled": true,
              "containerWidth": "50%",
              "childrenWidth": "96%"
            },
            {
              "label": "سطح ارشدیت در زمینه فعالیت",
              "type": "select",
              "key": "seniorityLevel",
              "selectType": "checkboxListMultiSelect",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "",
              "required": true,
              "enabled": true,
              "containerWidth": "50%",
              "childrenWidth": "96%"
            },
            {
              "label": "نوع قراردادهای قابل قبول",
              "type": "select",
              "key": "acceptableContractTypes",
              "selectType": "checkboxListMultiSelect",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "",
              "required": true,
              "enabled": true,
              "containerWidth": "50%",
              "childrenWidth": "96%"
            },
            {
              "label": "حداقل حقوق درخواستی",
              "type": "select",
              "key": "minSalary",
              "selectType": "list",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "حداقل حقوق درخواستی خود را انتخاب کنید",
              "required": true,
              "enabled": true,
              "containerWidth": "50%",
              "childrenWidth": "96%"
            },
            {
              "label": "مزایای شغلی مورد نظر",
              "type": "select",
              "key": "jobBenefits",
              "selectType": "withIconSelect",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "",
              "required": false,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            }
          ]
        }
      ]
    },
    "course": {
      "title": "افزودن دوره",
      "available": true,
      "items": [
        {
          "label": "دسته بندی",
          "type": "selectCategory",
          "key": "categoryId",
          "value": "",
          "error": "",
          "placeholder": "دسته بندی دوره را انتخاب کنید"
        },
        {
          "label": "عنوان",
          "type": "regular",
          "key": "title",
          "value": "",
          "error": "",
          "placeholder": "عنوان دوره را وارد کنید"
        },
        {
          "label": "توضیحات",
          "type": "regular",
          "key": "description",
          "value": "",
          "error": "",
          "placeholder": "توضیحات کوتاه مربوط به دوره را وارد کنید"
        },
        {
          "label": "درباره دوره",
          "type": "textarea",
          "key": "about",
          "value": "",
          "error": "",
          "placeholder": "کمی درباره دوره در اینجا بنویسید"
        },
        {
          "label": "مدت زمان دوره",
          "type": "regular",
          "key": "courseDuration",
          "inputType": "number",
          "value": "",
          "error": "",
          "placeholder": "مدت زمان کل دوره را به دقیقه وارد کنید"
        },
        {
          "label": "لینک پیش نمایش",
          "type": "regular",
          "key": "preview",
          "value": "",
          "error": "",
          "placeholder": "چه چیزی در این دوره آموزش می دهید؟ در این قسمت توضیح دهید"
        },
        {
          "label": "لینک تصویر بنر",
          "type": "regular",
          "key": "featuredImage",
          "value": "",
          "error": "",
          "placeholder": "لینک تصویر بنر دوره را وارد کنید"
        }
      ],
      "chapters": [
        {
          "inputs": [
            {
              "label": "عنوان فصل",
              "type": "regular",
              "key": "chapterTitle",
              "value": "",
              "error": "",
              "placeholder": "عنوان فصل را وارد کنید"
            },
            {
              "label": "زمان فصل",
              "type": "regular",
              "key": "chapterDuration",
              "inputType": "number",
              "value": "",
              "error": "",
              "placeholder": "زمان کل فصل را به دقیقه وارد کنید"
            },
            {
              "label": "توضیحات فصل",
              "type": "regular",
              "key": "chapterDescription",
              "value": "",
              "error": "",
              "placeholder": "توضیحات کوتاه مربوط به این فصل را وارد کنید"
            }
          ],
          "videos": [
            {
              "inputs": [
                {
                  "label": "عنوان ویدیو",
                  "type": "regular",
                  "key": "videoTitle",
                  "value": "",
                  "error": "",
                  "placeholder": "عنوان ویدیو را وارد کنید"
                },
                {
                  "label": "زمان ویدیو",
                  "type": "regular",
                  "key": "videoDuration",
                  "inputType": "number",
                  "value": "",
                  "error": "",
                  "placeholder": "زمان ویدیو را به دقیقه وارد کنید"
                },
                {
                  "label": "توضیحات ویدیو",
                  "type": "regular",
                  "key": "videoDescription",
                  "value": "",
                  "error": "",
                  "placeholder": "توضیحات کوتاه مربوط به این ویدیو را وارد کنید"
                },
                {
                  "label": "لینک ویدیو",
                  "type": "regular",
                  "key": "videoLink",
                  "value": "",
                  "error": "",
                  "placeholder": "لینک ویدیو را وارد کنید"
                }
              ]
            }
          ]
        }
      ]
    },
    "certificate": {
      "title": "صدور مدرک",
      "available": true,
      "items": [
        {
          "label": "عنوان مدرک",
          "type": "regular",
          "key": "title",
          "value": "",
          "error": "",
          "placeholder": "عنوان نیاز را وارد کنید"
        },
        {
          "label": "توضیحات مربوط به این مدرک",
          "type": "textarea",
          "key": "description",
          "value": "",
          "error": "",
          "placeholder": "توضیحات"
        },
        {
          "label": "این مدرک را به چه شخصی واگذار می کنید؟",
          "type": "selectUser",
          "key": "userId",
          "value": "",
          "error": "",
          "placeholder": "انتخاب فرد"
        },
        {
          "label": "این مدرک بابت گذراندن کدام دوره اعطا می شود؟",
          "type": "selectCourse",
          "key": "courseId",
          "value": "",
          "error": "",
          "placeholder": "انتخاب دوره"
        }
      ]
    },
    "exam": {
      "title": "ثبت آزمون",
      "available": true,
      "items": [
        {
          "label": "عنوان آزمون",
          "type": "regular",
          "key": "title",
          "value": "",
          "error": "",
          "placeholder": "عنوان آزمون را وارد کنید"
        },
        {
          "label": "توضیحات مربوط به این آزمون",
          "type": "textarea",
          "key": "description",
          "value": "",
          "error": "",
          "placeholder": "توضیحات"
        },
        {
          "label": "این آزمون پس از گذراندن کدام دوره در دسترس قرار می گیرد؟",
          "type": "selectCourse",
          "key": "courseId",
          "value": "",
          "error": "",
          "placeholder": "انتخاب دوره"
        },
        {
          "label": "انتخاب رندوم سوالات؟",
          "type": "multiCheckboxSelect",
          "key": "isRandom",
          "selectItems": [
            {
              "label": "بله",
              "value": true
            }
          ],
          "value": "",
          "error": "",
          "placeholder": ""
        }
      ]
    },
    "question-archive": {
      "title": "ثبت بانک سوال جدید",
      "available": true,
      "items": [
        {
          "label": "عنوان بانک سوال",
          "type": "regular",
          "key": "title",
          "value": "",
          "error": "",
          "placeholder": "عنوان بانک سوال را وارد کنید"
        },
        {
          "label": "توضیحات مربوط به این بانک سوال",
          "type": "textarea",
          "key": "description",
          "value": "",
          "error": "",
          "placeholder": "توضیحات"
        },
        {
          "label": "این بانک سوال مربوط به کدام دوره است؟",
          "type": "selectCourse",
          "key": "courseId",
          "value": "",
          "error": "",
          "placeholder": "انتخاب دوره"
        }
      ],
      "questions": [
        {
          "title": {
            "label": "عنوان سوال",
            "type": "regular",
            "key": "questionTitle",
            "value": "",
            "error": "",
            "placeholder": "عنوان سوال را وارد کنید"
          },
          "description": {
            "label": "توضیحات سوال",
            "type": "regular",
            "key": "questionDescription",
            "value": "",
            "error": "",
            "placeholder": "توضیحات سوال را وارد کنید (اختیاری)"
          },
          "chapterId": {
            "label": "این سوال مربوط به کدام فصل از دوره است؟",
            "type": "selectChapter",
            "key": "questionChapterId",
            "value": "",
            "error": "",
            "placeholder": "انتخاب فصل"
          },
          "answers": [
            {
              "label": "گزینه یک",
              "type": "regular",
              "key": "qustionAnswer1",
              "value": "",
              "error": "",
              "placeholder": "پاسخ را وارد کنید",
              "isCorrect": false
            },
            {
              "label": "گزینه دو",
              "type": "regular",
              "key": "qustionAnswer2",
              "value": "",
              "error": "",
              "placeholder": "پاسخ را وارد کنید",
              "isCorrect": false
            },
            {
              "label": "گزینه سه",
              "type": "regular",
              "key": "qustionAnswer3",
              "value": "",
              "error": "",
              "placeholder": "پاسخ را وارد کنید",
              "isCorrect": false
            },
            {
              "label": "گزینه چهار",
              "type": "regular",
              "key": "qustionAnswer4",
              "value": "",
              "error": "",
              "placeholder": "پاسخ را وارد کنید",
              "isCorrect": false
            }
          ],
          "selectCorrectAnswer": {
            "label": "گزینه صحیح",
            "type": "selectCorrectAnswer",
            "key": "correctAnswer",
            "value": "",
            "error": "",
            "placeholder": "گزینه صحیح را انتخاب کنید"
          }
        }
      ]
    },
    "ticket": {
      "title": "ثبت تیکت",
      "available": true,
      "items": [
        {
          "label": "عنوان تیکت",
          "type": "regular",
          "key": "title",
          "value": "",
          "error": "",
          "placeholder": "عنوان تیکت را وارد کنید"
        },
        {
          "label": "دسته بندی تیکت",
          "type": "selectCategory",
          "key": "ticketCategory",
          "value": "",
          "error": "",
          "placeholder": "انتخاب دسته بندی تیکت",
          "selectItems": [
            {
              "label": "ایده ها",
              "value": "ideas"
            },
            {
              "label": "نیازمندی ها",
              "value": "requirements"
            },
            {
              "label": "دوره ها",
              "value": "courses"
            },
            {
              "label": "آزمون ها",
              "value": "exams"
            },
            {
              "label": "رزومه ساز",
              "value": "resume-builder"
            },
            {
              "label": "هم تیمی یاب",
              "value": "partner-finder"
            },
            {
              "label": "پنل کسب و کار",
              "value": "business-panel"
            }
          ]
        },
        {
          "label": "متن تیکت",
          "type": "textarea",
          "key": "description",
          "value": "",
          "error": "",
          "placeholder": "توضیحات"
        }
      ]
    },
    "canvas": {
      "title": "ثبت بوم کسب و کار",
      "available": true,
      "items": [
        {
          "label": "بخش های مشتری",
          "type": "textarea",
          "key": "customerSections",
          "value": "",
          "error": "",
          "placeholder": ""
        },
        {
          "label": "گزاره ارزش",
          "type": "textarea",
          "key": "valueProposition",
          "value": "",
          "error": "",
          "placeholder": ""
        },
        {
          "label": "کانال ها",
          "type": "textarea",
          "key": "channels",
          "value": "",
          "error": "",
          "placeholder": ""
        },
        {
          "label": "روابط مشتری",
          "type": "textarea",
          "key": "customerRelations",
          "value": "",
          "error": "",
          "placeholder": ""
        },
        {
          "label": "جریانات درآمد",
          "type": "textarea",
          "key": "incomeStreams",
          "value": "",
          "error": "",
          "placeholder": ""
        },
        {
          "label": "شرکای کلیدی",
          "type": "textarea",
          "key": "mainPartners",
          "value": "",
          "error": "",
          "placeholder": ""
        },
        {
          "label": "ساختارهای هزینه",
          "type": "textarea",
          "key": "costStructures",
          "value": "",
          "error": "",
          "placeholder": ""
        },
        {
          "label": "فعالیت های کلیدی",
          "type": "textarea",
          "key": "mainActivities",
          "value": "",
          "error": "",
          "placeholder": ""
        }
      ]
    },
    "training": {
      "title": "افزودن آموزش جدید",
      "available": true,
      "items": [
        {
          "label": "عنوان آموزش",
          "type": "regular",
          "key": "title",
          "value": "",
          "error": "",
          "placeholder": "عنوان آموزش را وارد کنید"
        },
        {
          "label": "توضیحات مربوط به این آموزش",
          "type": "textarea",
          "key": "description",
          "value": "",
          "error": "",
          "placeholder": "توضیحات"
        },
        {
          "label": "تصویر شاخص آموزش",
          "type": "regular",
          "key": "image",
          "value": "",
          "error": "",
          "placeholder": "لینک تصویر شاخص آموزش را وارد کنید"
        },
        {
          "label": "نام برگزار کننده",
          "type": "regular",
          "key": "organizerName",
          "value": "",
          "error": "",
          "placeholder": "نام برگزار کننده را وارد کنید"
        },
        {
          "label": "تصویر برگزار کننده",
          "type": "regular",
          "key": "organizerImage",
          "value": "",
          "error": "",
          "placeholder": "لینک تصویر مربوط به برگزار کننده را وارد کنید"
        },
        {
          "label": "کد ویدیو لحظه نگار",
          "type": "textarea",
          "key": "videoEmbeddedCode",
          "value": "",
          "error": "",
          "placeholder": "در صورتی که آموزش شما امروز برگزار نمی شود، این فیلد را خالی بگذارید",
          "required": false
        },
        {
          "label": "این آموزش در چه تاریخی برگزار می شود؟",
          "type": "date",
          "key": "availableIn",
          "value": "",
          "error": "",
          "placeholder": "انتخاب تاریخ شروع"
        },
        {
          "label": "قیمت",
          "type": "regular",
          "inputType": "number",
          "key": "price",
          "value": "",
          "error": "",
          "placeholder": "قیمت این آموزش را بر حسب تومان وارد کنید (0 برای رایگان)"
        }
      ]
    },
    "profile": {
      "title": "ویرایش پروفایل",
      "available": true,
      "items": [
        {
          "label": "نام و نام خانوادگی",
          "preInputLabel": "",
          "type": "regular",
          "key": "fullName",
          "selectType": "",
          "value": "",
          "error": "",
          "defaultValue": "",
          "placeholder": "نام و نام خانوادگی خود را وارد کنید",
          "required": true,
          "enabled": true,
          "containerWidth": "50%",
          "childrenWidth": "96%"
        },
        {
          "label": "کد ملی",
          "preInputLabel": "",
          "type": "regular",
          "key": "CPRNumber",
          "selectType": "",
          "value": "",
          "error": "",
          "defaultValue": "",
          "placeholder": "کد ملی خود را وارد کنید",
          "required": true,
          "enabled": true,
          "containerWidth": "50%",
          "childrenWidth": "96%"
        },
        {
          "label": "سال تولد",
          "preInputLabel": "",
          "type": "select",
          "key": "birthYear",
          "selectType": "list",
          "value": "",
          "error": "",
          "defaultValue": "",
          "placeholder": "سال تولد خود را انتخاب کنید",
          "required": true,
          "enabled": true,
          "containerWidth": "50%",
          "childrenWidth": "96%"
        },
        {
          "label": "استان محل سکونت",
          "preInputLabel": "",
          "type": "select",
          "key": "residenceState",
          "selectType": "list",
          "value": "",
          "error": "",
          "defaultValue": "",
          "placeholder": "استان محل سکونت خود را انتخاب کنید",
          "required": true,
          "enabled": true,
          "containerWidth": "50%",
          "childrenWidth": "96%"
        },
        {
          "label": "شهر محل سکونت",
          "preInputLabel": "",
          "type": "select",
          "dependentKey": "residenceState",
          "key": "residenceCity",
          "selectType": "list",
          "value": "",
          "error": "",
          "defaultValue": "",
          "placeholder": "شهر محل سکونت خود را انتخاب کنید",
          "required": true,
          "enabled": true,
          "containerWidth": "50%",
          "childrenWidth": "96%"
        },
        {
          "label": "آخرین مدرک تحصیلی",
          "preInputLabel": "",
          "type": "select",
          "key": "degree",
          "selectType": "list",
          "value": "",
          "error": "",
          "defaultValue": "",
          "placeholder": "آخرین مدرک تحصیلی خود را انتخاب کنید",
          "required": true,
          "enabled": true,
          "containerWidth": "50%",
          "childrenWidth": "96%"
        },
        {
          "label": "آخرین رشته تحصیلی",
          "preInputLabel": "",
          "type": "regular",
          "key": "studyField",
          "selectType": "",
          "value": "",
          "error": "",
          "defaultValue": "",
          "placeholder": "آخرین رشته تحصیلی خود را وارد کنید",
          "required": true,
          "enabled": true,
          "containerWidth": "50%",
          "childrenWidth": "96%"
        }
      ]
    },
    "job-offer": {
      "title": "ثبت آگهی",
      "available": true,
      "items": [
        {
          "label": "عنوان آگهی",
          "type": "regular",
          "key": "jobTitle",
          "value": "",
          "error": "",
          "placeholder": "عنوان آگهی را وارد کنید"
        },
        {
          "label": "دسته بندی شغلی",
          "type": "selectCategory",
          "key": "jobCategory",
          "value": "",
          "error": "",
          "placeholder": "انتخاب دسته بندی شغلی"
        },
        {
          "label": "استان / شهر",
          "type": "selectState",
          "key": "stateCity",
          "value": "",
          "error": "",
          "placeholder": "انتخاب استان / شهر"
        },
        {
          "label": "نوع همکاری",
          "type": "selectType",
          "key": "cooperationType",
          "value": "",
          "error": "",
          "placeholder": "انتخاب نوع همکاری"
        },
        {
          "label": "حداقل حقوق",
          "type": "selectSalary",
          "key": "minSalary",
          "value": "",
          "error": "",
          "placeholder": "انتخاب حداقل حقوق"
        },
        {
          "label": "شرح شغل / مسئولیت‌ها",
          "type": "textarea",
          "key": "jobDescription",
          "value": "",
          "error": "",
          "placeholder": "شامل: مسئولیت‌ها، شرایط احراز و مزایای شغلی"
        },
        {
          "label": "سابقه کار مرتبط",
          "type": "selectExperience",
          "key": "minExperience",
          "value": "",
          "error": "",
          "placeholder": "انتخاب حداقل سابقه کار مورد نیاز"
        },
        {
          "label": "حداقل مدرک تحصیلی مورد نیاز",
          "type": "selectDegree",
          "key": "minDegree",
          "value": "",
          "error": "",
          "placeholder": "انتخاب حداقل مدرک تحصیلی مورد نیاز"
        },
        {
          "label": "جنسیت",
          "type": "selectGender",
          "key": "gender",
          "value": "",
          "error": "",
          "placeholder": "انتخاب جنسیت"
        },
        {
          "label": "وضعیت خدمت سربازی",
          "type": "selectMilitaryStatus",
          "key": "militaryStatus",
          "value": "",
          "error": "",
          "placeholder": "انتخاب وضعیت خدمت"
        }
      ]
    },
    "partner-finder": {
      "title": "هم تیمی یاب",
      "available": true,
      "sections": {
        "basics": {
          "sectionTitle": "اطلاعات پایه",
          "sectionKey": "basics",
          "children": [
            {
              "label": "+ آپلود عکس",
              "preInputLabel": "",
              "description": "",
              "type": "image",
              "key": "generalImage",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "",
              "required": false,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "160px"
            },
            {
              "label": "نام و نام خانوادگی",
              "preInputLabel": "",
              "description": "",
              "type": "regular",
              "key": "fullName",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "نام و نام خانوادگی خود را وارد کنید",
              "required": true,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "آدرس ایمیل",
              "preInputLabel": "",
              "description": "",
              "type": "regular",
              "key": "email",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "آدرس ایمیل خود را وارد کنید",
              "required": true,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "آدرس پروفایل در لینکدین",
              "preInputLabel": "",
              "description": "آدرس باید با https:// شروع بشود",
              "type": "regular",
              "key": "linkedInURL",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "آدرس پروفایل لینکدین خود را وارد کنید",
              "required": false,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "استان- شهر محل سکونت",
              "preInputLabel": "",
              "description": "داخل چه استان و شهری هستید؟",
              "type": "select",
              "key": "residenceStateCity",
              "selectType": "list",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "استان و شهر محل سکونت خود را انتخاب کنید",
              "required": true,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "خودتان را معرفی کنید!",
              "preInputLabel": "",
              "description": "یکی دو پاراگراف درمورد سرگذشت خود و چیزی که دنبال آن می گردید بنویسید و به صورت کامل دستاورد ها و علاقمندی های حرفه ای خود را ذکر کنید. ",
              "type": "textarea",
              "key": "introduceSelfText",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "توضیحات",
              "required": true,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "لینک ویدیویی که خود را در آن معرفی می کنید",
              "preInputLabel": "",
              "description": "",
              "type": "regular",
              "key": "introduceSelfVideo",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "https://youtube.com/watch?v=...",
              "required": false,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "دستاوردهای قابل تحسین",
              "preInputLabel": "",
              "description": "به طور مثال جایزه یا مدرک حرفه ای که دریافت کردید، یا هرچیز قابل تحسین که ساخته اید.",
              "type": "textarea",
              "key": "accomplishments",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "توضیحات",
              "required": true,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "تحصیل: مدرسه ها، مدارک (همراه با رشته تحصیلی) و سال هایی که در آن فارغ التحصیل شدید.",
              "preInputLabel": "",
              "description": "لطفا هر خط را از دیگری جدا کنید",
              "type": "textarea",
              "key": "educationHistory",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "توضیحات",
              "required": true,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "استخدام: کارفرمایان، موقعیت شغلی، جایگاه شما و زمانی که در آنجا مشغول بودید.",
              "preInputLabel": "",
              "description": "لطفا هر خط را از دیگری جدا کنید",
              "type": "textarea",
              "key": "employmentHistory",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "توضیحات",
              "required": true,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "آیا شما فنی هستید؟",
              "preInputLabel": "",
              "description": "در  صورتی که برنامه نویس، دانشمند یا مهندسی که قادر به ساخت محصول هست هستید، گزینه بله را انتخاب کنید.",
              "type": "select",
              "key": "areYouTechnical",
              "selectType": "checkboxListSingleSelect",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "",
              "required": true,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "به چه موضوعاتی بیشتر علاقمند هستید؟",
              "preInputLabel": "",
              "description": "ما سعی می کنیم پروفایل های بیشتری با علایق مشترک به شما نشان بدهیم",
              "type": "select",
              "key": "interestingTopics",
              "selectType": "searchAndList",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "",
              "required": true,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "آدرس برنامه ریزی (گوگل میت یا اسکایپ یا...)",
              "preInputLabel": "",
              "description": "تنها هم تیمی های شما قادر به دیدن این بخش هستند.",
              "type": "regular",
              "key": "meetURL",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "اگر اپلیکیشنی برای برنامه ریزی دارید، آدرس آن را وارد کنید.",
              "required": false,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "آدرس توییتر",
              "preInputLabel": "",
              "description": "تنها هم تیمی های شما قادر به دیدن این بخش هستند.",
              "type": "regular",
              "key": "twitterURL",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "آدرس توییتر خود را وارد کنید",
              "required": false,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "آدرس اینستاگرام",
              "preInputLabel": "",
              "description": "تنها هم تیمی های شما قادر به دیدن این بخش هستند.",
              "type": "regular",
              "key": "instagramURL",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "آدرس اینستاگرام خود را وارد کنید",
              "required": false,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "چگونه با هم تیمی یاب ویراک آشنا شدید؟",
              "preInputLabel": "",
              "description": "",
              "type": "regular",
              "key": "howYouKnowUs",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "",
              "required": false,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            }
          ]
        },
        "moreAboutYou": {
          "sectionTitle": "اطلاعات بیشتر درباره شما",
          "sectionKey": "moreAboutYou",
          "children": [
            {
              "label": "آیا در حال حاضر استارتاپ یا ایده ای دارید؟",
              "preInputLabel": "",
              "description": "",
              "type": "select",
              "key": "startupOrIdea",
              "selectType": "checkboxListSingleSelect",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "",
              "required": true,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "به چه ایده هایی برای دنبال کردن علاقه دارید؟",
              "preInputLabel": "",
              "description": "",
              "type": "textarea",
              "key": "ideaToPursue",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "",
              "required": false,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "آیا در حال حاضر هم تیمی دارید؟",
              "preInputLabel": "",
              "description": "",
              "type": "select",
              "key": "hasPartner",
              "selectType": "checkboxListSingleSelect",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "",
              "required": true,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "از چه زمانی حاضرید روی استارتاپ به صورت تمام وقت کار کنید؟",
              "preInputLabel": "",
              "description": "",
              "type": "select",
              "key": "whenToBeFullTime",
              "selectType": "checkboxListSingleSelect",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "",
              "required": true,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "مسئولیت های چه بخشی از استارتاپ را حاضرید به عهده بگیرید؟",
              "preInputLabel": "",
              "description": "",
              "type": "select",
              "key": "responsiblityAreas",
              "selectType": "searchAndList",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "",
              "required": true,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "چه انتظاراتی در زمینه تقسیم سهام دارید؟",
              "preInputLabel": "",
              "description": "ما شدیدا تقسیم سهام را پیشنهاد می کنیم.",
              "type": "textarea",
              "key": "equitySplit",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "چقدر سهام به هم تیمی خود می دهید؟ اگر به یک تیم بپیوندید، چقدر سهام درخواست می کنید؟",
              "required": false,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "چه سرگرمی هایی برای اوقات فراغت خود دارید؟",
              "preInputLabel": "",
              "description": "سرگرمی ها و علایق شما چه چیزهایی هستند؟",
              "type": "textarea",
              "key": "hobbies",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "توضیحات",
              "required": false,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "مسیر زندگی خود را چگونه توصیف می کنید؟",
              "preInputLabel": "",
              "description": "چه تجربه هایی ارزش های امروز شما را ساخته اند؟",
              "type": "textarea",
              "key": "values",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "توضیحات",
              "required": false,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "چیز دیگری وجود دارد که بخواهید درباره خودتان اضافه کنید؟",
              "preInputLabel": "",
              "description": "هرچیزی که علاقمندید هم تیمی شما درباره شما بداند را در اینجا بنویسید.",
              "type": "textarea",
              "key": "additionalInfo",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "توضیحات",
              "required": false,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            }
          ]
        },
        "partnerPreferences": {
          "sectionTitle": "ملزومات و ترجیحات هم تیمی",
          "sectionKey": "partnerPreferences",
          "children": [
            {
              "label": "دنبال چه هم تیمی ای می گردید؟",
              "preInputLabel": "",
              "description": "",
              "type": "textarea",
              "key": "partnerDescription",
              "selectType": "",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "توضیحات",
              "required": false,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "",
              "type": "parent",
              "key": "partnerIdeaParent",
              "children": [
                {
                  "label": "آیا دنبال هم تیمی ای می گردید که ایده ای از خود داشته باشد، یا میخواهید با یکدیگر به دنبال ایده های جدید باشید؟",
                  "preInputLabel": "",
                  "description": "",
                  "type": "select",
                  "key": "partnerIdea",
                  "selectType": "checkboxListSingleSelect",
                  "value": "",
                  "error": "",
                  "defaultValue": "",
                  "placeholder": "",
                  "required": true,
                  "enabled": true,
                  "containerWidth": "69%",
                  "childrenWidth": "100%"
                },
                {
                  "label": "این مورد برای من الزامی است",
                  "preInputLabel": "",
                  "type": "checkbox",
                  "key": "isPartnerIdeaRequired",
                  "selectType": "",
                  "value": false,
                  "error": "",
                  "defaultValue": false,
                  "placeholder": "",
                  "required": false,
                  "enabled": true,
                  "containerWidth": "27%",
                  "childrenWidth": "100%"
                }
              ]
            },
            {
              "label": "",
              "type": "parent",
              "key": "partnerTechStatusParent",
              "children": [
                {
                  "label": "یک هم تیمی فنی را ترجیح می دهید یا غیر فنی؟",
                  "preInputLabel": "",
                  "description": "",
                  "type": "select",
                  "key": "partnerTechStatus",
                  "selectType": "checkboxListSingleSelect",
                  "value": "",
                  "error": "",
                  "defaultValue": "",
                  "placeholder": "",
                  "required": true,
                  "enabled": true,
                  "containerWidth": "69%",
                  "childrenWidth": "100%"
                },
                {
                  "label": "این مورد برای من الزامی است",
                  "preInputLabel": "",
                  "type": "checkbox",
                  "key": "isPartnerTechStatusRequired",
                  "selectType": "",
                  "value": false,
                  "error": "",
                  "defaultValue": false,
                  "placeholder": "",
                  "required": false,
                  "enabled": true,
                  "containerWidth": "27%",
                  "childrenWidth": "100%"
                }
              ],
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "آیا شما هم تیمی ای را ترجیح می دهید که زمانشان با شما متناسب باشد؟",
              "preInputLabel": "",
              "description": "",
              "type": "select",
              "key": "partnerTiming",
              "selectType": "checkboxListSingleSelect",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "",
              "required": true,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "",
              "type": "parent",
              "key": "partnerLocationParent",
              "children": [
                {
                  "label": "آیا محل خاصی برای پیدا کردن هم تیمی خود مد نظر دارید؟",
                  "preInputLabel": "",
                  "description": "",
                  "type": "select",
                  "key": "partnerLocation",
                  "selectType": "checkboxListSingleSelect",
                  "value": "",
                  "error": "",
                  "defaultValue": "",
                  "placeholder": "",
                  "required": true,
                  "enabled": true,
                  "containerWidth": "69%",
                  "childrenWidth": "100%"
                },
                {
                  "label": "این مورد برای من الزامی است",
                  "preInputLabel": "",
                  "type": "checkbox",
                  "key": "isPartnerLocationRequired",
                  "selectType": "",
                  "value": false,
                  "error": "",
                  "defaultValue": false,
                  "placeholder": "",
                  "required": false,
                  "enabled": true,
                  "containerWidth": "27%",
                  "childrenWidth": "100%"
                }
              ],
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "",
              "type": "parent",
              "key": "partnerAgeRangeParent",
              "children": [
                {
                  "label": "آیا بازه سنی خاصی را مد نظر دارید؟",
                  "preInputLabel": "",
                  "description": "",
                  "type": "select",
                  "key": "partnerAgeRange",
                  "selectType": "checkboxListSingleSelect",
                  "value": "",
                  "error": "",
                  "defaultValue": "",
                  "placeholder": "",
                  "required": true,
                  "enabled": true,
                  "containerWidth": "69%",
                  "childrenWidth": "100%"
                },
                {
                  "label": "این مورد برای من الزامی است",
                  "preInputLabel": "",
                  "type": "checkbox",
                  "key": "isPartnerAgeRangeRequired",
                  "selectType": "",
                  "value": false,
                  "error": "",
                  "defaultValue": false,
                  "placeholder": "",
                  "required": false,
                  "enabled": true,
                  "containerWidth": "27%",
                  "childrenWidth": "100%"
                }
              ],
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "",
              "type": "parent",
              "key": "partnerResponsiblityAreasParent",
              "children": [
                {
                  "label": "ترجیح می دهید هم تیمی شما مسئولیت چه بخشی از استارتاپ را به عهده بگیرد؟",
                  "preInputLabel": "",
                  "description": "",
                  "type": "select",
                  "key": "partnerResponsiblityAreas",
                  "selectType": "searchAndList",
                  "value": "",
                  "error": "",
                  "defaultValue": "",
                  "placeholder": "",
                  "required": true,
                  "enabled": true,
                  "containerWidth": "69%",
                  "childrenWidth": "100%"
                },
                {
                  "label": "این مورد برای من الزامی است",
                  "preInputLabel": "",
                  "type": "checkbox",
                  "key": "isPartnerResponsiblityAreasRequired",
                  "selectType": "",
                  "value": false,
                  "error": "",
                  "defaultValue": false,
                  "placeholder": "",
                  "required": false,
                  "enabled": true,
                  "containerWidth": "27%",
                  "childrenWidth": "100%"
                }
              ],
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "آیا شما هم تیمی ای را ترجیح می دهید که دارای علایق مشترک با شما هستند؟",
              "preInputLabel": "",
              "description": "",
              "type": "select",
              "key": "partnerInterestingTopics",
              "selectType": "checkboxListSingleSelect",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "",
              "required": true,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            },
            {
              "label": "آیا شما هم تیمی خانم را ترجیح می دهید؟",
              "preInputLabel": "",
              "description": "این گزینه مختص خانم ها است، و فقط خانم ها می توانند این مورد را داخل پروفایل شما ببینند.",
              "type": "select",
              "key": "patnerGenderPreference",
              "selectType": "checkboxListSingleSelect",
              "value": "",
              "error": "",
              "defaultValue": "",
              "placeholder": "",
              "required": true,
              "enabled": true,
              "containerWidth": "100%",
              "childrenWidth": "100%"
            }
          ]
        }
      }
    }
  },
  "list": {
    "idea": {
      "title": "لیست ایده ها",
      "hasExport": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasEdit": {
        "thinker": true,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasSingle": {
        "thinker": true,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": true
      },
      "hasImage": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasDelete": {
        "thinker": true,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": true
      },
      "hasConfirm": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": true
      }
    },
    "requirement": {
      "title": "لیست نیازها",
      "hasExport": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasEdit": {
        "thinker": true,
        "requrementOwener": true,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasSingle": {
        "thinker": true,
        "requrementOwener": true,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": true
      },
      "hasImage": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasDelete": {
        "thinker": false,
        "requrementOwener": true,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": true
      },
      "hasConfirm": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": true
      }
    },
    "my-requirement": {
      "title": "لیست نیازها",
      "hasExport": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasEdit": {
        "thinker": false,
        "requrementOwener": true,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasSingle": {
        "thinker": false,
        "requrementOwener": true,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasImage": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasDelete": {
        "thinker": false,
        "requrementOwener": true,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      }
    },
    "resume": {
      "title": "لیست رزومه ها",
      "hasExport": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasEdit": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasSingle": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasImage": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasDelete": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      }
    },
    "startup": {
      "title": "لیست استارتاپ ها",
      "hasExport": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasEdit": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasSingle": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasImage": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasDelete": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      }
    },
    "user": {
      "title": "لیست کاربران",
      "hasExport": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasEdit": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasSingle": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasImage": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasDelete": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      }
    },
    "course": {
      "title": "لیست دوره ها",
      "hasExport": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasEdit": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": true,
        "admin": true
      },
      "hasSingle": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": true,
        "business": false,
        "teacher": true,
        "admin": true
      },
      "hasImage": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": true,
        "business": false,
        "teacher": true,
        "admin": true
      },
      "hasDelete": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": true,
        "admin": true
      },
      "hasConfirm": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": true
      }
    },
    "my-course": {
      "title": "لیست دوره های من",
      "hasExport": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasEdit": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasSingle": {
        "thinker": true,
        "requrementOwener": true,
        "jobSeeker": true,
        "business": true,
        "teacher": true,
        "admin": true
      },
      "hasImage": {
        "thinker": true,
        "requrementOwener": true,
        "jobSeeker": true,
        "business": true,
        "teacher": true,
        "admin": true
      },
      "hasDelete": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      }
    },
    "certificate": {
      "title": "لیست مدارک صادر شده",
      "hasExport": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasEdit": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasSingle": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasImage": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasDelete": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      }
    },
    "my-certificate": {
      "title": "لیست مدارک من",
      "hasExport": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": true,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasEdit": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasSingle": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasImage": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasDelete": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      }
    },
    "exam": {
      "title": "لیست آزمون ها",
      "hasExport": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasEdit": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": true,
        "admin": true
      },
      "hasSingle": {
        "thinker": true,
        "requrementOwener": true,
        "jobSeeker": true,
        "business": true,
        "teacher": true,
        "admin": true
      },
      "hasImage": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasDelete": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": true,
        "admin": true
      }
    },
    "my-exam": {
      "title": "لیست آزمون های من",
      "hasExport": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasEdit": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasSingle": {
        "thinker": true,
        "requrementOwener": true,
        "jobSeeker": true,
        "business": true,
        "teacher": true,
        "admin": true
      },
      "hasImage": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasDelete": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      }
    },
    "question-archive": {
      "title": "بانک سوالات",
      "items": [
        "یک",
        "دو",
        "سه",
        "چهار",
        "پنج",
        "شش",
        "هفت",
        "هشت",
        "نه"
      ],
      "hasExport": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasEdit": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": true,
        "admin": true
      },
      "hasSingle": {
        "thinker": true,
        "requrementOwener": true,
        "jobSeeker": true,
        "business": true,
        "teacher": true,
        "admin": true
      },
      "hasImage": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasDelete": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": true,
        "admin": true
      }
    },
    "exam-result": {
      "title": "نتایج آزمون ها",
      "hasExport": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasEdit": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": true,
        "admin": true
      },
      "hasSingle": {
        "thinker": true,
        "requrementOwener": true,
        "jobSeeker": true,
        "business": true,
        "teacher": true,
        "admin": true
      },
      "hasImage": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasDelete": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": true,
        "admin": true
      }
    },
    "job-offer": {
      "title": "لیست آگهی ها",
      "hasExport": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasEdit": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": true
      },
      "hasSingle": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": true,
        "business": false,
        "teacher": false,
        "admin": true
      },
      "hasImage": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": true,
        "business": true,
        "teacher": false,
        "admin": true
      },
      "hasDelete": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": true
      }
    },
    "my-job-offer": {
      "title": "آگهی های من",
      "hasExport": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasEdit": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": true,
        "teacher": false,
        "admin": false
      },
      "hasSingle": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": true,
        "teacher": false,
        "admin": false
      },
      "hasImage": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": true,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasDelete": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": true,
        "teacher": false,
        "admin": false
      }
    },
    "my-request": {
      "title": "درخواست های من",
      "hasExport": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasEdit": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasSingle": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasImage": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      },
      "hasDelete": {
        "thinker": false,
        "requrementOwener": false,
        "jobSeeker": false,
        "business": false,
        "teacher": false,
        "admin": false
      }
    }
  },
  "edit": {
    "course": {
      "title": "ویرایش دوره",
      "available": true,
      "items": [
        {
          "label": "دسته بندی",
          "type": "selectCategory",
          "key": "categoryId",
          "value": "",
          "error": "",
          "placeholder": "دسته بندی دوره را انتخاب کنید"
        },
        {
          "label": "عنوان",
          "type": "regular",
          "key": "title",
          "value": "",
          "error": "",
          "placeholder": "عنوان دوره را وارد کنید"
        },
        {
          "label": "توضیحات",
          "type": "regular",
          "key": "description",
          "value": "",
          "error": "",
          "placeholder": "توضیحات کوتاه مربوط به دوره را وارد کنید"
        },
        {
          "label": "درباره دوره",
          "type": "textarea",
          "key": "about",
          "value": "",
          "error": "",
          "placeholder": "کمی درباره دوره در اینجا بنویسید"
        },
        {
          "label": "مدت زمان دوره",
          "type": "regular",
          "key": "courseDuration",
          "inputType": "number",
          "value": "",
          "error": "",
          "placeholder": "مدت زمان کل دوره را به دقیقه وارد کنید"
        },
        {
          "label": "لینک پیش نمایش",
          "type": "regular",
          "key": "preview",
          "value": "",
          "error": "",
          "placeholder": "چه چیزی در این دوره آموزش می دهید؟ در این قسمت توضیح دهید"
        },
        {
          "label": "لینک تصویر بنر",
          "type": "regular",
          "key": "featuredImage",
          "value": "",
          "error": "",
          "placeholder": "لینک تصویر بنر دوره را وارد کنید"
        }
      ],
      "chapters": [
        {
          "inputs": [
            {
              "label": "عنوان فصل",
              "type": "regular",
              "key": "chapterTitle",
              "value": "",
              "error": "",
              "placeholder": "عنوان فصل را وارد کنید"
            },
            {
              "label": "زمان فصل",
              "type": "regular",
              "key": "chapterDuration",
              "inputType": "number",
              "value": "",
              "error": "",
              "placeholder": "زمان کل فصل را به دقیقه وارد کنید"
            },
            {
              "label": "توضیحات فصل",
              "type": "regular",
              "key": "chapterDescription",
              "value": "",
              "error": "",
              "placeholder": "توضیحات کوتاه مربوط به این فصل را وارد کنید"
            }
          ],
          "videos": [
            {
              "inputs": [
                {
                  "label": "عنوان ویدیو",
                  "type": "regular",
                  "key": "videoTitle",
                  "value": "",
                  "error": "",
                  "placeholder": "عنوان ویدیو را وارد کنید"
                },
                {
                  "label": "زمان ویدیو",
                  "type": "regular",
                  "key": "videoDuration",
                  "inputType": "number",
                  "value": "",
                  "error": "",
                  "placeholder": "زمان ویدیو را به دقیقه وارد کنید"
                },
                {
                  "label": "توضیحات ویدیو",
                  "type": "regular",
                  "key": "videoDescription",
                  "value": "",
                  "error": "",
                  "placeholder": "توضیحات کوتاه مربوط به این ویدیو را وارد کنید"
                },
                {
                  "label": "لینک ویدیو",
                  "type": "regular",
                  "key": "videoLink",
                  "value": "",
                  "error": "",
                  "placeholder": "لینک ویدیو را وارد کنید"
                }
              ]
            }
          ]
        }
      ]
    }
  },
  "readOnly": {
    "profile": {
      "title": "پروفایل من",
      "available": true,
      "items": [
        {
          "label": "نام و نام خانوادگی",
          "preInputLabel": "",
          "type": "regular",
          "key": "fullName",
          "selectType": "",
          "value": "",
          "error": "",
          "defaultValue": "",
          "placeholder": "نام و نام خانوادگی خود را وارد کنید",
          "required": true,
          "enabled": false,
          "containerWidth": "50%",
          "childrenWidth": "96%"
        },
        {
          "label": "کد ملی",
          "preInputLabel": "",
          "type": "regular",
          "key": "CPRNumber",
          "selectType": "",
          "value": "",
          "error": "",
          "defaultValue": "",
          "placeholder": "کد ملی خود را وارد کنید",
          "required": true,
          "enabled": false,
          "containerWidth": "50%",
          "childrenWidth": "96%"
        },
        {
          "label": "سال تولد",
          "preInputLabel": "",
          "type": "select",
          "key": "birthYear",
          "selectType": "list",
          "value": "",
          "error": "",
          "defaultValue": "",
          "placeholder": "سال تولد خود را انتخاب کنید",
          "required": true,
          "enabled": false,
          "containerWidth": "50%",
          "childrenWidth": "96%"
        },
        {
          "label": "استان محل سکونت",
          "preInputLabel": "",
          "type": "select",
          "key": "residenceState",
          "selectType": "list",
          "value": "",
          "error": "",
          "defaultValue": "",
          "placeholder": "استان محل سکونت خود را انتخاب کنید",
          "required": true,
          "enabled": false,
          "containerWidth": "50%",
          "childrenWidth": "96%"
        },
        {
          "label": "شهر محل سکونت",
          "preInputLabel": "",
          "type": "select",
          "dependentKey": "residenceState",
          "key": "residenceCity",
          "selectType": "list",
          "value": "",
          "error": "",
          "defaultValue": "",
          "placeholder": "شهر محل سکونت خود را انتخاب کنید",
          "required": true,
          "enabled": false,
          "containerWidth": "50%",
          "childrenWidth": "96%"
        },
        {
          "label": "آخرین مدرک تحصیلی",
          "preInputLabel": "",
          "type": "select",
          "key": "degree",
          "selectType": "list",
          "value": "",
          "error": "",
          "defaultValue": "",
          "placeholder": "آخرین مدرک تحصیلی خود را انتخاب کنید",
          "required": true,
          "enabled": false,
          "containerWidth": "50%",
          "childrenWidth": "96%"
        },
        {
          "label": "آخرین رشته تحصیلی",
          "preInputLabel": "",
          "type": "regular",
          "key": "studyField",
          "selectType": "",
          "value": "",
          "error": "",
          "defaultValue": "",
          "placeholder": "آخرین رشته تحصیلی خود را وارد کنید",
          "required": true,
          "enabled": false,
          "containerWidth": "50%",
          "childrenWidth": "96%"
        }
      ]
    }
  }
}';

$json_response = json_encode($content);
echo $json_response;
die();