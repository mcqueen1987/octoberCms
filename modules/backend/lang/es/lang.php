<?php

return [
    'auth' => [
        'title' => 'Area de Administración'
    ],
    'field' => [
        'invalid_type' => 'El tipo de campo utilizado es inválido :type.',
        'options_method_not_exists' => 'El modelo clase: model debe definir un método: method() opciones recurrentes para el ":field" desde campo.'
    ],
    'widget' => [
        'not_registered' => "La clase del modulo ':name' no ha sido registrada",
        'not_bound' => "El módulo con la clase ':name' no se ha unido al controlador"
    ],
    'page' => [
        'untitled' => 'Sin título',
        'access_denied' => [
            'label' => 'Acceso denegado',
            'help' => 'No tiene permisos necesarios para ver esta página.',
            'cms_link' => 'Volver al panel de administración'
        ],
        'invalid_token' => [
            'label' => 'Token de seguridad invalido'
        ]
    ],
    'partial' => [
        'not_found_name' => "El parcial ':name' no se encuentra."
    ],
    'account' => [
        'sign_out' => 'Desconectarse',
        'login' => 'Entrar',
        'reset' => 'Restablecer',
        'restore' => 'Restaurar',
        'login_placeholder' => 'usuario',
        'password_placeholder' => 'contraseña',
        'forgot_password' => '¿Olvidó su clave?',
        'enter_email' => 'Ingrese su correo',
        'enter_login' => 'Ingrese su usuario',
        'email_placeholder' => 'correo',
        'enter_new_password' => 'Ingrese una nueva contraseña',
        'password_reset' => 'Restablecer la contraseña',
        'restore_success' => 'Correo electrónico enviado a su dirección con las instruciones.',
        'restore_error' => "No se ha encontrado el usuario ':login'",
        'reset_success' => 'Contraseña ha sido restablecida. Ahora puede iniciar sesión',
        'reset_error' => 'La información para restablecer la contraseña no es valida. ¡Por favor, vuelva a intentarlo!',
        'reset_fail' => '¡No es posible restablecer la contraseña!',
        'apply' => 'Aplicar',
        'cancel' => 'Cancelar',
        'delete' => 'Borrar',
        'ok' => 'OK'
    ],
    'dashboard' => [
        'menu_label' => 'Escritorio',
        'widget_label' => 'Módulo',
        'widget_width' => 'Ancho',
        'full_width' => 'ancho completo',
        'manage_widgets' => 'Gestionar modulos',
        'add_widget' => 'Agregar un módulo',
        'widget_inspector_title' => 'Configuración del módulo',
        'widget_inspector_description' => 'Configuración del módulo de reporte',
        'widget_columns_label' => 'Ancho :columns',
        'widget_columns_description' => 'El ancho del módulo, número entre 1 y 10.',
        'widget_columns_error' => 'Por favor, ingrese un número entre 1 y 10 para el ancho del módulo.',
        'columns' => '{1} columna|[2,Inf] columnas',
        'widget_new_row_label' => 'Forzar nueva línea',
        'widget_new_row_description' => 'Insertar el módulo en una nueva fila.',
        'widget_title_label' => 'Título del módulo',
        'widget_title_error' => 'El título del módulo es obligatorio.',
        'reset_layout' => 'Restablecer diseño',
        'reset_layout_confirm' => 'Restablecer diseño de vualta a los valores por defecto?',
        'reset_layout_success' => 'El diseño se ha restablecido',
        'make_default' => 'Predeterminar',
        'make_default_confirm' => 'Establecer el diseño actual por defecto?',
        'make_default_success' => 'Diseño actual es ahora el predeterminado',
        'status' => [
            'widget_title_default' => 'Estado del sistema',
            'update_available' => '{0} actualizaciones disponibles!|{1} actualización disponible!|[2,Inf] actualizaciones disponibles!',
            'updates_pending' => 'Actualizaciones de software pendientes',
            'updates_nil' => 'Software está actualizado',
            'updates_link' => 'Actualiza',
            'warnings_pending' => 'Algunas incidencias necesitan atención',
            'warnings_nil' => 'No hay avisos a mostrar',
            'warnings_link' => 'Ver',
            'core_build' => 'Versión del sistema',
            'event_log' => 'Registro de eventos',
            'request_log' => 'Registro de peticiones',
            'app_birthday' => 'En línea desde'
        ],
        'welcome' => [
            'widget_title_default' => 'Bienvenido',
            'welcome_back_name' => 'Bienvenido de nuevo a :app, :name.',
            'welcome_to_name' => 'Bienvenido a :app, :name.',
            'first_sign_in' => 'Esta es la primera vez que ha iniciado sesión.',
            'last_sign_in' => 'Su última sesión fue',
            'view_access_logs' => 'Ver los registros de acceso',
            'nice_message' => '¡Que tengas un gran día!'
        ]
    ],
    'user' => [
        'name' => 'Administrador',
        'menu_label' => 'Administradores',
        'menu_description' => 'Gestionar usuarios, grupos y permisos para el back-end.',
        'list_title' => 'Gestionar administradores',
        'new' => 'Nuevo Administrador',
        'login' => 'Entrar',
        'first_name' => 'Nombres',
        'last_name' => 'Apellidos',
        'full_name' => 'Nombre Completo',
        'email' => 'Correo',
        'groups' => 'Grupos',
        'groups_comment' => 'Especificar a que grupos debe pertenecer la cuenta. Los grupos definen permisos de usuario, que pueden reemplazar los de nivel de usuario, en la ficha permisos.',
        'avatar' => 'Avatar',
        'password' => 'Contraseña',
        'password_confirmation' => 'Confirmar Contraseña',
        'permissions' => 'Permisos',
        'account' => 'Cuenta',
        'superuser' => 'Super Usuario',
        'superuser_comment' => 'Permitir que esta cuenta tenga acceso a todas las áreas del sistema. Los super usuarios pueden añadir y gestionar otros usuarios.',
        'send_invite' => 'Enviar invitación por correo electrónico',
        'send_invite_comment' => 'Enviar una invitación conteniendo la información de inicio de sesión y contraseña.',
        'delete_confirm' => '¿Eliminar este administrador?',
        'return' => 'Regresar a la lista de administradores',
        'allow' => 'Permitir',
        'inherit' => 'Heredar',
        'deny' => 'Denegar',
        'group' => [
            'name' => 'Grupo',
            'name_comment' => 'El nombre aparece en la lista de grupo en el formulario de crear/editar de Administrador.',
            'name_field' => 'Nombre',
            'description_field' => 'Descripción',
            'is_new_user_default_field_label' => 'Grupo por Defecto',
            'is_new_user_default_field' => 'Añadir a los nuevos administradores a este grupo por defecto',
            'code_field' => 'Código',
            'code_comment' => 'Entrar un código único para acceder a ella con la API.',
            'menu_label' => 'Gestionar Grupos',
            'list_title' => 'Gestionar Grupos',
            'new' => 'Nuevo Grupo',
            'delete_confirm' => '¿Eliminar este grupo de administradores?',
            'return' => 'Volver a la lista de grupos',
            'users_count' => 'Usuarios'
        ],
        'preferences' => [
            'not_authenticated' => 'No existe un usuario autenticado para cargar o guardar las preferencias para.',
        ]
    ],
    'list' => [
        'default_title' => 'Lista',
        'search_prompt' => 'Buscar...',
        'no_records' => 'No hay registros en esta vista.',
        'missing_model' => 'El comportamiento de la lista utilizada en :class no tiene un modelo definido.',
        'missing_column' => 'No hay definiciones de columna para :columns.',
        'missing_columns' => 'Lista usada en :class no tiene lista columnas definidas.',
        'missing_definition' => "Comportamiento de la lista no contiene una columna para ':field'.",
        'missing_parent_definition' => "Comportamiento de la lista no contiene una definición para ':definition'.",
        'behavior_not_ready' => 'Comportamiento de la lista no inicializado, compruebe que han llamado makeLists() en el controlador.',
        'invalid_column_datetime' => "¿Valor de la columna ':column' no es un objeto DateTime, le falta una referencia de \$dates en el Modelo?",
        'pagination' => 'Registros visualizados: :from-:to de :total',
        'prev_page' => 'Página anterior',
        'next_page' => 'Página siguiente',
        'refresh' => 'Refrescar',
        'updating' => 'Actualizando...',
        'loading' => 'Cargando...',
        'setup_title' => 'Configurar lista',
        'setup_help' => 'Utilice las casillas de verificación para seleccionar las columnas que desea ver en la lista. Usted puede cambiar la posición de las columnas arrastrándolas arriba o hacia abajo.',
        'records_per_page' => 'Registros por página',
        'records_per_page_help' => 'Seleccione el número de registros por página para mostrar. Tenga en cuenta que un número alto de registros en una sola página puede reducir el rendimiento.',
        'check' => 'Comprueba',
        'delete_selected' => 'Eliminar seleccionados',
        'delete_selected_empty' => 'No hay registros seleccionados para eliminar.',
        'delete_selected_confirm' => '¿Borrar los registros seleccionados?',
        'delete_selected_success' => 'Eliminados los registros seleccionados.',
        'column_switch_true' => 'Sí',
        'column_switch_false' => 'No'
    ],
    'fileupload' => [
        'attachment' => 'Adjunto',
        'help' => 'Agregue un título y descripción al adjunto',
        'title_label' => 'Título',
        'description_label' => 'Descripción',
        'default_prompt' => 'Haz clic en %s o arrastra un archivo aquí para subir',
        'attachment_url' => 'URL Adjunto',
        'upload_file' => 'Subir archivo',
        'upload_error' => 'Error al subir.',
        'remove_confirm' => '¿Está seguro?',
        'remove_file' => 'Eliminar archivo'
    ],
    'form' => [
        'create_title' => 'Nuevo :name',
        'update_title' => 'Editar :name',
        'preview_title' => 'Vista previa de :name',
        'create_success' => ':name creado',
        'update_success' => ':name actualizado',
        'delete_success' => ':name borrado',
        'reset_success' => 'Restablecido con éxito',
        'missing_id' => 'No se ha especificado el identificador del registro de formulario.',
        'missing_model' => 'El comportamiento del formulario utilizado en :class no tiene un modelo definido.',
        'missing_definition' => "El comportamiento del formulario no contiene un campo para ':field'.",
        'not_found' => 'El registro del formulario con un ID de :id no se pudo encontrar.',
        'action_confirm' => '¿Está usted seguro?',
        'create' => 'Crear',
        'create_and_close' => 'Crear y cerrar',
        'creating' => 'Creando...',
        'creating_name' => 'Creando :name...',
        'save' => 'Guardar',
        'save_and_close' => 'Guardar y cerrar',
        'saving' => 'Guardando...',
        'saving_name' => 'Guardando :name...',
        'delete' => 'Borrar',
        'deleting' => 'Borrando...',
        'confirm_delete' => '¿Borrar registro?',
        'confirm_delete_multiple' => '¿Borrar los registros seleccionados?',
        'deleting_name' => 'Borrando :name...',
        'reset_default' => 'Restablecer por defecto',
        'resetting' => 'Restableciendo',
        'resetting_name' => 'Restableciendo :name',
        'undefined_tab' => 'Varios',
        'field_off' => 'Apagar',
        'field_on' => 'Encender',
        'add' => 'Agregar',
        'apply' => 'Aplicar',
        'cancel' => 'Cancelar',
        'close' => 'Cerrar',
        'confirm' => 'Confirmar',
        'reload' => 'Recargar',
        'complete' => 'Completo',
        'ok' => 'OK',
        'or' => 'o',
        'confirm_tab_close' => '¿Cerrar la pestaña? Se perderán los cambios no guardados.',
        'behavior_not_ready' => 'El comportamiento del formulario no se ha inicializado, compruebe que ha llamado initForm() en el controlador.',
        'preview_no_files_message' => 'Los archivos no se han subido',
        'preview_no_record_message' => 'No hay ningún registro seleccionado.',
        'select' => 'Seleccionar',
        'select_all' => 'todos',
        'select_none' => 'ninguno',
        'select_placeholder' => 'por favor seleccione',
        'insert_row' => 'Agregar Fila',
        'insert_row_below' => 'Insertar fila debajo',
        'delete_row' => 'Borrar Fila',
        'concurrency_file_changed_title' => 'Archivo ha cambiado',
        'concurrency_file_changed_description' => "El archivo que está editando ha sido cambiado en el disco por otro usuario. Usted puede volver a cargar el archivo y perder los cambios o sobreescribir el archivo en el disco.",
        'return_to_list' => 'Volver a listado'
    ],
    'recordfinder' => [
        'find_record' => 'Buscar Registro'
    ],
    'relation' => [
        'missing_config' => "Relación de comportamiento no tiene ninguna configuración para ':config'.",
        'missing_definition' => "Relación de comportamiento no contiene una definición para ':field'.",
        'missing_model' => 'Relación de comportamiento utilizado en :class no tiene un modelo definido.',
        'invalid_action_single' => 'Esta acción no se puede realizar en una relación singular.',
        'invalid_action_multi' => 'Esta acción no se puede realizar en una relación múltiple.',
        'help' => 'Haga clic en un elemento para añadir.',
        'related_data' => 'Relacionar :name datos',
        'add' => 'Agregar',
        'add_selected' => 'Agregar seleccionado',
        'add_a_new' => 'Agregar un nuevo :name',
        'link_selected' => 'Vinculo selecionado',
        'link_a_new' => 'Vinculo a nuevo :name',
        'cancel' => 'Cancelar',
        'close' => 'Cerrar',
        'add_name' => 'Agregar :name',
        'create' => 'Crear',
        'create_name' => 'Crear :name',
        'update' => 'Actualizar',
        'update_name' => 'Actualizar :name',
        'preview' => 'Vista previa',
        'preview_name' => 'Vista previa :name',
        'remove' => 'Remover',
        'remove_name' => 'Remover :name',
        'delete' => 'Borrar',
        'delete_name' => 'Borrar :name',
        'delete_confirm' => '¿Está usted seguro?',
        'link' => 'Vincular',
        'link_name' => 'Vincular :name',
        'unlink' => 'Desvincular',
        'unlink_name' => 'Desvincular :name',
        'unlink_confirm' => '¿Está usted seguro?'
    ],
    'reorder' => [
        'default_title' => 'Reordenar registros',
        'no_records' => 'No existen registros disponibles para ordenar.'
    ],
    'model' => [
        'name' => 'Modelo',
        'not_found' => "Modelo ':class' con el ID :id no se pudo encontrar",
        'missing_id' => 'No se ha especificado un ID para encontrar el modelo guardado.',
        'missing_relation' => "Modelo ':class' no contiene una definición para ':relation'.",
        'missing_method' => "Modelo ':class' no contiene un método ':method'.",
        'invalid_class' => "Modelo :model utilizado en :class no es váildo, este debería heredar la clase del \Model.",
        'mass_assignment_failed' => "Asignación masiva falló para el atributo del Modelo ':attribute'."
    ],
    'warnings' => [
        'tips' => 'Consejos de configuración del sistema',
        'tips_description' => 'Hay problemas que necesitan de su atención para configurar el sistema correctamente.',
        'permissions' => 'Directorio :name o los subdirectorios no se puede escribir por PHP. Por favor establecer los permisos correctos para el servidor web en este directorio.',
        'extension' => 'La extensión PHP :name no está instalada. Por favor instalar esta librería y activar la extensión.'
    ],
    'editor' => [
        'menu_label' => 'Preferencias del Editor',
        'menu_description' => 'Configurar las preferencias del editor de código, como el tamaño de la letra y el color del esquema.',
        'font_size' => 'Tamaño de la letra',
        'tab_size' => 'Tamaño de la Solapa',
        'use_hard_tabs' => 'Espacio entre solapas',
        'code_folding' => 'Código Plegable',
        'code_folding_begin' => 'Marca comienzo',
        'code_folding_begin_end' => 'Marca comienzo y fin',
        'autocompletion' => 'Autocompletado',
        'word_wrap' => 'Ajuste de línea',
        'highlight_active_line' => 'Resaltar línea activa',
        'auto_closing' => 'Cerrado de etiquetas automático',
        'show_invisibles' => 'Mostrar caracteres invisibles',
        'show_gutter' => 'Mostrar numeros de línea',
        'basic_autocompletion'=> 'Autocompletado Basico (Ctrl + Espacio)',
        'live_autocompletion'=> 'Autocompletado en Vivo',
        'enable_snippets'=> 'Activar uso de Snippets',
        'display_indent_guides'=> 'Mostrar Guias de Identado',
        'show_print_margin'=> 'Mostrar Margen de impresión',
        'mode_off' => 'Off',
        'mode_fluid' => 'Fluido',
        '40_characters' => '40 Caracteres',
        '80_characters' => '80 Caracteres',
        'theme' => 'Color del esquema',
        'markup_styles' => 'Estilos de marcado',
        'custom_styles' => 'Hoja de estilo personalizada',
        'custom styles_comment' => 'Estilos personalizados para incluir en el editor HTML.',
        'markup_classes' => 'Clases de marcado',
        'paragraph' => 'Párrafo',
        'link' => 'Enlace',
        'table' => 'Tabla',
        'table_cell' => 'Celda de Tabla',
        'image' => 'Imagen',
        'label' => 'Etiqueta',
        'class_name' => 'Nombre de Clase',
        'markup_tags' => 'Etiquetas de marcado',
        'allowed_empty_tags' => 'Permitir etiquetas vacias',
        'allowed_empty_tags_comment' => 'La lista de etiquetas que no se quitan cuando no tienen ningún contenido dentro.',
        'allowed_tags' => 'Etiquetas permitidas',
        'allowed_tags_comment' => 'La lista de etiquetas permitidas.',
        'no_wrap' => 'No envuelva las etiquetas',
        'no_wrap_comment' => 'La lista de etiquetas que no deben estar envueltas dentro de etiquetas de bloque.',
        'remove_tags' => 'Quitar etiquetas',
        'remove_tags_comment' => 'La lista de etiquetas que se eliminan junto con su contenido.'
    ],
    'tooltips' => [
        'preview_website' => 'Vista previa del sitio'
    ],
    'mysettings' => [
        'menu_label' => 'Mis configuraciones',
        'menu_description' => 'Configuraciones relacionadas con su cuenta'
    ],
    'myaccount' => [
        'menu_label' => 'Mi Cuenta',
        'menu_description' => 'Actualice la información de su cuenta, como nombre, dirección de correo electrónico y contraseña.',
        'menu_keywords' => 'Inicio de sesión de seguridad'
    ],
    'branding' => [
        'menu_label' => 'Personalizar back-end',
        'menu_description' => 'Perzonalizar el área de administración, así como el nombre, los colores y el logo.',
        'brand' => 'Marca',
        'logo' => 'Logo',
        'logo_description' => 'Subir un logo personalizado para usarlo en el back-end.',
        'app_name' => 'Nombre de la aplicación',
        'app_name_description' => 'Este nombre se mostrará en el título del back-end.',
        'app_tagline' => 'Eslogan',
        'app_tagline_description' => 'Se mostrará en la página de inicio de sesión del back-end.',
        'colors' => 'Colores',
        'primary_color' => 'Primario color',
        'secondary_color' => 'Secundario color',
        'accent_color' => 'Color de énfasis',
        'styles' => 'Estilos',
        'custom_stylesheet' => 'Hoja de estilo personalizada',
        'navigation' => 'Navegación',
        'menu_mode' => 'Estilo de Menú',
        'menu_mode_inline' => 'Inline',
        'menu_mode_tile' => 'Mosaicos',
        'menu_mode_collapsed' => 'Colapsado'
    ],
    'backend_preferences' => [
        'menu_label' => 'Preferencias del panel de administración',
        'menu_description' => 'Gestione la preferencia de idioma y la apariencia del panel.',
        'region' => 'Región',
        'code_editor' => 'Editor de Código',
        'timezone' => 'Zona horaria',
        'timezone_comment' => 'Ajustar las fechas mostradas a esta zona horaria.',
        'locale' => 'Idioma',
        'locale_comment' => 'Seleccione su localización deseada para el uso del idioma.'
    ],
    'access_log' => [
        'hint' => 'Este registro muestra la lista de ingresos al panel de administración. Los registros se mantienen por un total de :days días.',
        'menu_label' => 'Registro de acceso',
        'menu_description' => 'Ver registro de ingresos al panel de administracion.',
        'created_at' => 'Fecha y hora',
        'login' => 'Entrar',
        'ip_address' => 'IP',
        'first_name' => 'Nombre',
        'last_name' => 'Apellido',
        'email' => 'Correo'
    ],
    'filter' => [
        'all' => 'todo',
        'options_method_not_exists' => "La clase de modelo :model debe definir un método :method() para regresar opciones para el filtro ':filter'.",
        'date_all' => 'todo el período'
    ],
    'import_export' => [
        'upload_csv_file' => '1. Subir un archivo CSV',
        'import_file' => 'Importar archivo',
        'first_row_contains_titles' => 'Primera fila contiene títulos de columna',
        'first_row_contains_titles_desc' => 'Dejelo activado si la primera fila en el CSV se utiliza como los títulos de columna.',
        'match_columns' => '2. Hacer coincidir las columnas del archivo con los campos de la base de datos',
        'file_columns' => 'Archivo de columnas',
        'database_fields' => 'Campos de base de datos',
        'set_import_options' => '3. Establecer opciones de importación',
        'export_output_format' => '1. Formato de salida de la exportación',
        'file_format' => 'Formato de archivo',
        'standard_format' => 'Formato estándar',
        'custom_format' => 'Formato personalizado',
        'delimiter_char' => 'Carácter delimitador',
        'enclosure_char' => 'Carácter recinto',
        'escape_char' => 'Carácter de escape',
        'select_columns' => '2. Seleccionar columnas a exportar',
        'column' => 'Columna',
        'columns' => 'Columnas',
        'set_export_options' => '3. Establecer opciones de exportación',
        'show_ignored_columns' => 'Mostrar columnas ignoradas',
        'auto_match_columns' => 'Auto coincidir columnas',
        'created' => 'Creado',
        'updated' => 'Actualizado',
        'skipped' => 'Omitido',
        'warnings' => 'Advertencias',
        'errors' => 'Errores',
        'skipped_rows' => 'Filas saltadas',
        'import_progress' => 'Progreso de Importación',
        'processing' => 'Procesando',
        'import_error' => 'Error de importación',
        'upload_valid_csv' => 'Por favor suba un archivo CSV valido.',
        'drop_column_here' => 'Soltar la columna aquí...',
        'ignore_this_column' => 'Ignora esta columna',
        'processing_successful_line1' => 'Proceso de exportación de archivo completada!',
        'processing_successful_line2' => 'El navegador ahora redirigirá a la descarga del archivo.',
        'export_progress' => 'Progreso de exportación',
        'export_error' => 'Error de exportación',
        'column_preview' => 'Previsualización de la columna',
        'file_not_found_error' => 'Archivo no encontrado',
        'empty_error' => 'No había datos suministrados para exportar',
        'empty_import_columns_error' => 'Por favor especificar algunas columnas a importar.',
        'match_some_column_error' => 'Por favor, coincida algunas columnas en primer lugar.',
        'required_match_column_error' => 'Por favor, especifique una coincidencia para el campo requerido :label.',
        'empty_export_columns_error' => 'Por favor especificar algunas columnas para exportar.',
        'behavior_missing_uselist_error' => 'Debe implementar el comportamiento del controlador ListController con la opción de exportación "useList" activada.',
        'missing_model_class_error' => 'Por favor especificar la propiedad modelClass para :type',
        'missing_column_id_error' => 'Falta identificador de la columna',
        'unknown_column_error' => 'Columna desconocida',
        'encoding_not_supported_error' => 'La codificación del Archivo fuente no se reconoce. Por favor, seleccione la opción de formato de archivo personalizado con la codificación correcta para importar el archivo.',
        'encoding_format' => 'Codificación de archivo',
        'encodings' => [
            'utf_8' => 'UTF-8',
            'us_ascii' => 'US-ASCII',
            'iso_8859_1' => 'ISO-8859-1 (Latin-1, Western European)',
            'iso_8859_2' => 'ISO-8859-2 (Latin-2, Central European)',
            'iso_8859_3' => 'ISO-8859-3 (Latin-3, South European)',
            'iso_8859_4' => 'ISO-8859-4 (Latin-4, North European)',
            'iso_8859_5' => 'ISO-8859-5 (Latin, Cyrillic)',
            'iso_8859_6' => 'ISO-8859-6 (Latin, Arabic)',
            'iso_8859_7' => 'ISO-8859-7 (Latin, Greek)',
            'iso_8859_8' => 'ISO-8859-8 (Latin, Hebrew)',
            'iso_8859_0' => 'ISO-8859-9 (Latin-5, Turkish)',
            'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordic)',
            'iso_8859_11' => 'ISO-8859-11 (Latin, Thai)',
            'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltic Rim)',
            'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtic)',
            'iso_8859_15' => 'ISO-8859-15 (Latin-9, Western European revision with euro sign)',
            'windows_1251' => 'Windows-1251 (CP1251)',
            'windows_1252' => 'Windows-1252 (CP1252)'
        ]
    ],
    'permissions' => [
        'manage_media' => 'Subir y gestionar contenidos multimedia - imágenes, vídeos, sonidos y documentos'
    ],
    'mediafinder' => [
        'label' => 'Buscador de multimedia',
        'default_prompt' => 'Haga clic en el botón %s para buscar un elemento multimedia',
    ],
    'media' => [
        'menu_label' => 'Medios',
        'upload' => 'Subir',
        'move' => 'Mover',
        'delete' => 'Eliminar',
        'add_folder' => 'Nueva carpeta',
        'search' => 'Buscar',
        'display' => 'Mostrar',
        'filter_everything' => 'Todo',
        'filter_images' => 'Imágenes',
        'filter_video' => 'Vídeo',
        'filter_audio' => 'Audio',
        'filter_documents' => 'Documentos',
        'library' => 'Biblioteca',
        'size' => 'Tamaño',
        'title' => 'Título',
        'last_modified' => 'Última modificación',
        'public_url' => 'URL pública',
        'click_here' => 'Haz click aquí',
        'thumbnail_error' => 'Error generando la miniatura.',
        'return_to_parent' => 'Volver a la carpeta anterior',
        'return_to_parent_label' => 'Atrás ..',
        'nothing_selected' => 'No se ha seleccionado nada.',
        'multiple_selected' => 'Se han seleccionado varios elementos.',
        'uploading_file_num' => 'Subiendo :number archivo(s)...',
        'uploading_complete' => 'Subida completada',
        'uploading_error' => 'Error al subir',
        'type_blocked' => 'El tipo de archivo usado ha sido bloqueado por motivos de seguridad.',
        'order_by' => 'Ordenar por',
        'folder' => 'Carpeta',
        'no_files_found' => 'No se han encontrado archivos.',
        'delete_empty' => 'Por favor, selecciona los elementos que quieres eliminar.',
        'delete_confirm' => '¿Deseas eliminar los elementos seleccionados?',
        'error_renaming_file' => 'Error al renombrar el elemento.',
        'new_folder_title' => 'Nueva carpeta',
        'folder_name' => 'Nombre de la carpeta',
        'error_creating_folder' => 'Error al crear la carpeta',
        'folder_or_file_exist' => 'Ya existe un archivo o carpeta con este nombre.',
        'move_empty' => 'Por favor, selecciona los elementos que quieres mover.',
        'move_popup_title' => 'Mover archivos o carpetas',
        'move_destination' => 'Carpeta de destino',
        'please_select_move_dest' => 'Por favor, selecciona una carpeta de destino.',
        'move_dest_src_match' => 'Por favor, selecciona otra carpeta de destino.',
        'empty_library' => 'La biblioteca de medios está vacía. Sube archivos o crea carpetas para empezar.',
        'insert' => 'Insertar',
        'crop_and_insert' => 'Cortar e insertar',
        'select_single_image' => 'Por favor, selecciona sólo una imagen.',
        'selection_not_image' => 'El elemento seleccionado no es una imagen.',
        'restore' => 'Deshacer todos los cambios',
        'resize' => 'Redimensionar...',
        'selection_mode_normal' => 'Normal',
        'selection_mode_fixed_ratio' => 'Aspecto fijo',
        'selection_mode_fixed_size' => 'Tamaño fijo',
        'height' => 'Alto',
        'width' => 'Ancho',
        'selection_mode' => 'Modo de selección',
        'resize_image' => 'Redimensionar imagen',
        'image_size' => 'Tamaño de la imagen:',
        'selected_size' => 'Selección:'
    ],
];
