About the module:

This is a simple module that creates a callback form and sends a notification to Telegram

Compatible C OpenCart 3 versions
To send data to the messenger, we will need the following:

    Create a bot.
    Activate the bot.
    Check the correct setting.

Create a bottle-bottle.

In Telegram we write a bot @botfather and give him a command / start, then select the / newbot command, follow the prompts and choose the name of the bot and how we will call it. The chosen name may be busy, you will report this hint

After sending the name Botfather, send us a message that everything is ready, and send a special key - tokens, insert it into the field of tokens.

Next, we need to decide where we want to receive applications, or directly in a personal from the bot or in the group. In the case of the first option, we need to get our internal ID in telegrams, it can be obtained from a bot @getmyid_bot Next ID inserting in the chat ID field for notifications.

Second option

    On the left in the Telegraph menu, select "Create a group".
    We write the name of the group, for example "Applications from the site [Site name].
    Add a bot to the created group through the search.
    Then you need to activate the bot command / join @youname_bot. We write it in the created group, hereinafter clicking on the name of the bot @youname_bot, and we are throwing out to the dialogue with our bot, where it needs to be activated by the command / Start.

Now you need to get the chat ID, this is done by the following request:

https://api.telegram.org/botxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx/getupdates

Where XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX is your bot, obtained earlier.

Insert your token and go to the link, then go into chat with our bot and re-activate it with the command / Start, update the link and looking for the chat ID, it will look like this:

![img](https://i.imgur.com/fWMv1RD.png)

If you like the module you can thank the author Yoomoney BTC - BC1Q7Z09QH6D2F6UMT2UXLG7WTZJZR3HGDGFWL7MNE 


----------------

# О модуле:
Это простой модуль, который создает форму обратного звонка, и отправляет уведомление в telegram

Совместим c Opencart 3 версии

### Для отправки данных в мессенджер нам понадобится следующее:

- Создать бота.
- Активировать бота.
- Проверить правильность настройки.

### Создаем телеграм-бота.
В telegram пишем боту [@BotFather](https://t.me/botfather) и даем ему команду /start, далее выбираем команду /newbot, следуем подсказкам и выбираем имя бота и как его будем вызывать. Выбранное имя может быть занято, вам сообщит об этом подсказка

После отправки имени BotFather отправит нам сообщение о том, что все готово, и пришлет специальный ключ — токен, вставляем его в поле токен.

Далее нам нужно определиться куда хотим получать заявки, либо напрямую в личку от бота либо в группу.
В случае с первым вариантом, нам нужно получить наш внутренний id в телеграм, его можно получить у бота [@getmyid_bot](https://t.me/getmyid_bot)
Далее полученный id вставляем в поле ID чата для уведомлений.

Второй вариант
- Слева в меню Телеграма выбираем «Создать группу».
- Пишем название группы, например «Заявки с сайта [название сайта]».
- Добавляем бота в созданную группу через поиск.
- Затем нужно активировать бота командой /join @youname_bot. Пишем ее в созданной группе, далее кликаем по имени бота @youname_bot, и нас перебрасывает на диалог с нашим ботом, где его нужно активировать командой /start.

Теперь необходимо получить ID чата, делается это следующим запросом:

```
https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates
```

Где XXXXXXXXXXXXXXXXXXXXXXX — токен вашего бота, полученный ранее.

Вставляем свой токен и переходим по ссылке, затем снова заходим в чат с нашим ботом и повторно активируем его командой /start, обновляем ссылку и ищем ID чата, он будет выглядеть следующим образом:

![img](https://i.imgur.com/fWMv1RD.png)

Если вам понравился модуль вы можете отблагодарить автора
[YooMoney](https://yoomoney.ru/to/410015628334909)
btc - bc1q7z09qh6d2f6umt2uxlg7wtzjzr3hgdgfwl7mne
