<?php  return array (
  'tickets_prop_limit' => 'Лимит выборки результатов',
  'tickets_prop_offset' => 'Пропуск результатов с начала выборки',
  'tickets_prop_depth' => 'Глубина поиска ресурсов от каждого родителя.',
  'tickets_prop_sortby' => 'Сортировка выборки.',
  'tickets_prop_sortdir' => 'Направление сортировки',
  'tickets_prop_parents' => 'Список категорий, через запятую, для поиска результатов. По умолчанию выборка ограничена текущим родителем. Если поставить 0 - выборка не ограничивается.',
  'tickets_prop_resources' => 'Список ресурсов, через запятую, для вывода в результатах. Если id ресурса начинается с минуса, этот ресурс исключается из выборки.',
  'tickets_prop_threads' => 'Список веток комментариев, через запятую, для вывода в результатах. Если id ветки начинается с минуса, то она исключается из выборки.',
  'tickets_prop_where' => 'Строка, закодированная в JSON, с дополнительными условиями выборки.',
  'tickets_prop_tvPrefix' => 'Префикс для ТВ плейсхолдеров, например "tv.". По умолчанию параметр пуст.',
  'tickets_prop_includeContent' => 'Выбирать поле "content" у ресурсов.',
  'tickets_prop_includeTVs' => 'Список ТВ параметров для выборки, через запятую. Например: "action,time" дадут плейсхолдеры [[+action]] и [[+time]].',
  'tickets_prop_toPlaceholder' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
  'tickets_prop_outputSeparator' => 'Необязательная строка для разделения результатов работы.',
  'tickets_prop_showLog' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".',
  'tickets_prop_showUnpublished' => 'Показывать неопубликованные ресурсы.',
  'tickets_prop_showDeleted' => 'Показывать удалённые ресурсы.',
  'tickets_prop_showHidden' => 'Показывать ресурсы, скрытые в меню.',
  'tickets_prop_fastMode' => 'Если включено - в чанк результата будут подставлены только значения из БД. Все необработанные теги MODX, такие как фильтры, вызов сниппетов и другие - будут вырезаны.',
  'tickets_prop_action' => 'Режим работы сниппета',
  'tickets_prop_cacheKey' => 'Имя кэша сниппета. Если пустое - кэширование результатов будет отключено.',
  'tickets_prop_cacheTime' => 'Время кэширования.',
  'tickets_prop_thread' => 'Имя ветки комментариев. По умолчанию, "resource-[[*id]]".',
  'tickets_prop_user' => 'Выбрать только элементы, созданные этим пользователем.',
  'tickets_prop_tpl' => 'Чанк оформления для каждого результата',
  'tickets_prop_tplFormCreate' => 'Чанк для создания нового тикета',
  'tickets_prop_tplFormUpdate' => 'Чанк для обновления существующего тикета',
  'tickets_prop_tplSectionRow' => 'Чанк для оформления раздела вопросов в форме',
  'tickets_prop_tplPreview' => 'Чанк для предпросмотра тикета перед публикацией',
  'tickets_prop_tplCommentForm' => 'Чанк для формы добавления нового комментария',
  'tickets_prop_tplCommentAuth' => 'Чанк комментария для показа авторизованному пользователю.',
  'tickets_prop_tplCommentGuest' => 'Чанк комментария для показа гостям.',
  'tickets_prop_tplCommentDeleted' => 'Чанк удалённого комментария.',
  'tickets_prop_tplComments' => 'Обертка для всех комментариев страницы.',
  'tickets_prop_tplLoginToComment' => 'Чанк с требованием авторизоваться.',
  'tickets_prop_tplCommentEmailOwner' => 'Чанк для уведомления владельца тикета о новом комментарии.',
  'tickets_prop_tplCommentEmailReply' => 'Чанк для уведомления пользователя о том, что на его комментарий появился ответ.',
  'tickets_prop_tplCommentEmailSubscription' => 'Чанк для уведомления подписанного пользователя, что в теме появился новый комментарий.',
  'tickets_prop_tplCommentEmailBcc' => 'Чанк для уведомления админов сайта о новом комментарии.',
  'tickets_prop_tplTicketEmailBcc' => 'Чанк для уведомления админов сайта о новом тикете.',
  'tickets_prop_tplCommentEmailUnpublished' => 'Чанк для уведомления админов о неопубликованном комментарии.',
  'tickets_prop_tplWrapper' => 'Чанк-обёртка, для заворачивания всех результатов. Понимает один плейсхолдер: [[+output]]. Не работает вместе с параметром "toSeparatePlaceholders".',
  'tickets_prop_threadUrl' => 'Абсолютный url для перехода на комментарий из админки. Используется при комментировании не ресурсов.',
  'tickets_prop_commentsDepth' => 'Целое число, для указания максимальной глубины ветки комментариев.',
  'tickets_prop_autoPublish' => 'Публиковать все новые комментарии авторизованных пользователей, без премодерации.',
  'tickets_prop_autoPublishGuest' => 'Публиковать все новые комментарии анонимных пользователей, без премодерации.',
  'tickets_prop_formBefore' => 'Расположить форму комментирования перед комментариями. По умолчанию - нет.',
  'tickets_prop_gravatarIcon' => 'Если аватарка пользователя не найдена, грузить эту картинку на замену.',
  'tickets_prop_gravatarSize' => 'Размер загружаемого аватара',
  'tickets_prop_gravatarUrl' => 'Адрес для загрузки аватаров',
  'tickets_prop_allowedFields' => 'Поля тикета, которые разрешено заполнять пользователю. Можно указывать имена ТВ параметров.',
  'tickets_prop_requiredFields' => 'Обязательные поля, которые пользователь должен заполнить для отправки формы.',
  'tickets_prop_bypassFields' => 'Поля тикета, которые не нужно фильтровать при сохранении.',
  'tickets_prop_redirectUnpublished' => 'Вы можете указать, на какой документ отправлять пользователя при создании неопубликованного тикета.',
  'tickets_prop_sections_parents' => 'По умолчанию выводятся все доступные разделы тикетов, но вы можете ограничить их, указав конкретных родителей через запятую.',
  'tickets_prop_sections_resources' => 'По умолчанию выводятся все доступные тикеты разделов, но вы можете ограничить их, указав конкретные id секций через запятую.',
  'tickets_prop_sections_permissions' => 'Проверка прав на публикацию в раздел. По умолачанию проверяется разрешение "section_add_children".',
  'tickets_prop_sections_sortby' => 'Поле для сортировки списка разделов.',
  'tickets_prop_sections_sortdir' => 'Направление сортировки списка разделов.',
  'tickets_prop_sections_context' => 'Список контекстов для поиска секций, через запятую.',
  'tickets_prop_meta_tpl' => 'Чанк оформления информации о тикете.',
  'tickets_prop_getSection' => 'Сделать дополнительный запрос в БД для получения родительской секции?',
  'tickets_prop_getUser' => 'Сделать дополнительный запрос в БД для получения профиля автора?',
  'tickets_prop_allowGuest' => 'Включить возможность комментирования для неавторизованных пользователей?',
  'tickets_prop_allowGuestEdit' => 'Разрешать неавторизованным пользователям редактировать свои комментарии?',
  'tickets_prop_allowGuestEmails' => 'Отправлять гостям почтовые уведомления об ответах?',
  'tickets_prop_enableCaptcha' => 'Включить защиту от спама для неавторизованных пользователей?',
  'tickets_prop_minCaptcha' => 'Минимальное число для генерации кода защиты от спама.',
  'tickets_prop_maxCaptcha' => 'Максимальное число для генерации кода защиты от спама.',
  'tickets_prop_allowFiles' => 'Разрешить пользователю загружать файлы на сервер.',
  'tickets_prop_source' => 'Id источника медиа для загрузки файлов. По умолчанию будет использован источник, указанный в системной настройке "tickets.source_default".',
  'tickets_prop_tplFiles' => 'Контейнер для вывода загрузчика и списка уже загруженных файлов.',
  'tickets_prop_tplFile' => 'Чанк оформления загруженного файла, который не является изображением.',
  'tickets_prop_tplImage' => 'Чанк оформления загруженного изображения.',
  'tickets_prop_getFiles' => 'Вывести список загруженных файлов?',
  'tickets_prop_unusedFiles' => 'Выводить только те файлы, ссылки на которые отсутствуют в содержимом тикета.',
  'tickets_prop_meta_tplFile' => 'Чанк оформления файла в списке.',
  'tickets_prop_class' => 'Укажите класс для выборки.',
);