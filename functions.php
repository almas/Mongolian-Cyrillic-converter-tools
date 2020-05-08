<?php

function lat2uni($word)
{
    $letters_latin = array(127 => "&amp;", 128 => "O'O", 129 => "U'U", 130 => "O'o", 131 => "U'u", 132 => "o'o", 133 => "u'u", 134 => "O&#039;O", 135 => "U&#039;U", 136 => "O&#039;o", 137 => "U&#039;u", 138 => "o&#039;o", 139 => "u&#039;u", 142 => "gui", 143 => "GUI", 144 => "KH", 145 => "kh", 146 => "Kh", 148 => "Yah", 149 => "Yaj", 151 => "UE", 152 => "Ue", 153 => "ue", 154 => "OE", 155 => "Oe", 156 => "oe", 157 => " ni ", 158 => "yah", 159 => "yaj", 161 => "UI", 162 => "Ui", 163 => "ui", 164 => "VI", 165 => "Vi", 166 => "vi", 167 => "U&#039;I", 168 => "U&#039;i", 169 => "u&#039;i", 171 => "AI", 172 => "Ai", 173 => "ai", 174 => "EI", 175 => "Ei", 176 => "ei", 177 => "OI", 178 => "Oi", 179 => "oi", 180 => "W", 181 => "Vv", 182 => "VV", 183 => "vv", 184 => "yo", 185 => "Yo", 186 => "o'", 187 => "O'", 188 => "U'", 191 => "u'", 190 => "w", 192 => "Ya", 193 => "B", 194 => "V", 195 => "G", 196 => "D", 197 => "Ye", 198 => "J", 199 => "Z", 200 => "Ii", 201 => "I", 202 => "K", 203 => "L", 204 => "M", 205 => "N", 206 => "O", 207 => "P", 208 => "R", 209 => "Sh", 210 => "Ts", 211 => "Yu", 212 => "F", 213 => "Ch", 214 => "T", 215 => "H", 216 => "S", 217 => "Ue", 218 => "C", 219 => "A", 220 => "Ь", 221 => "E", 222 => "U", 223 => "Y", 224 => "ya", 225 => "b", 226 => "v", 227 => "g", 228 => "d", 229 => "ye", 230 => "j", 231 => "z", 232 => "ii", 233 => "i", 234 => "k", 235 => "l", 236 => "m", 237 => "n", 238 => "o", 239 => "p", 240 => "r", 241 => "sh", 242 => "ts", 243 => "yu", 244 => "f", 245 => "ch", 246 => "t", 247 => "h", 248 => "s", 249 => "ue", 250 => "c", 251 => "a", 252 => "`", 253 => "e", 254 => "u", 255 => "y", 256 => "&#039;", 257 => "Y", 258 => "y", 259 => "X", 260 => "x");
    $letters_unicode1 = array(127 => "&", 128 => "ӨӨ", 129 => "ҮҮ", 130 => "Өө", 131 => "Үү", 132 => "өө", 133 => "үү", 134 => "ӨӨ", 135 => "ҮҮ", 136 => "Өө", 137 => "Үү", 138 => "өө", 139 => "үү", 142 => "гүй", 143 => "ГҮЙ", 144 => "Х", 145 => "х", 146 => "Х", 148 => "Яах", 149 => "Яаж", 151 => "Ү", 152 => "Ү", 153 => "ү", 154 => "Ө", 155 => "Ө", 156 => "ө", 157 => " нь ", 158 => "яах", 159 => "яаж", 161 => "УЙ", 162 => "Уй", 163 => "уй", 164 => "ҮЙ", 165 => "Үй", 166 => "үй", 167 => "ҮЙ", 168 => "Үй", 169 => "үй", 171 => "АЙ", 172 => "Ай", 173 => "ай", 174 => "ЭЙ", 175 => "Эй", 176 => "эй", 177 => "ОЙ", 178 => "Ой", 179 => "ой", 180 => "В", 181 => "Үү", 182 => "ҮҮ", 183 => "үү", 184 => "ё", 185 => "Ё", 186 => "ө", 187 => "Ө", 188 => "Ү", 191 => "ү", 190 => "в", 192 => "Я", 193 => "Б", 194 => "В", 195 => "Г", 196 => "Д", 197 => "Е", 198 => "Ж", 199 => "З", 200 => "Ий", 201 => "И", 202 => "К", 203 => "Л", 204 => "М", 205 => "Н", 206 => "О", 207 => "П", 208 => "Р", 209 => "Ш", 210 => "Ц", 211 => "Ю", 212 => "Ф", 213 => "Ч", 214 => "Т", 215 => "Х", 216 => "С", 217 => "Ү", 218 => "Ц", 219 => "А", 220 => "Ь", 221 => "Э", 222 => "У", 223 => "Ю", 224 => "я", 225 => "б", 226 => "в", 227 => "г", 228 => "д", 229 => "е", 230 => "ж", 231 => "з", 232 => "ий", 233 => "и", 234 => "к", 235 => "л", 236 => "м", 237 => "н", 238 => "о", 239 => "п", 240 => "р", 241 => "ш", 242 => "ц", 243 => "ю", 244 => "ф", 245 => "ч", 246 => "т", 247 => "х", 248 => "с", 249 => "ү", 250 => "ц", 251 => "а", 252 => "ъ", 253 => "э", 254 => "у", 255 => "ю", 256 => "ь", 257 => "Ы", 258 => "ы", 259 => "Х", 260 => "х");
    $word = str_replace($letters_latin, $letters_unicode1, $word);

    return $word;
}


function uni2lat($word)
{
    $letters_latin = array(134 => "O'O", 135 => "U'U", 136 => "O'o", 137 => "U'u", 138 => "o'o", 139 => "u'u", 142 => "gui", 143 => "GUI", 144 => "X", 145 => "x", 148 => "Yah", 149 => "Yaj", 151 => "U'", 153 => "u'", 154 => "O'", 156 => "o'", 157 => " ni ", 158 => "yah", 159 => "yaj", 161 => "I", 162 => "i", 184 => "yo", 185 => "Yo", 186 => "o'", 187 => "O'", 188 => "U'", 191 => "u'", 192 => "Ya", 193 => "B", 194 => "V", 195 => "G", 196 => "D", 197 => "Ye", 198 => "J", 199 => "Z", 201 => "I", 202 => "K", 203 => "L", 204 => "M", 205 => "N", 206 => "O", 207 => "P", 208 => "R", 209 => "Sh", 210 => "C", 211 => "Yu", 212 => "F", 213 => "Ch", 214 => "T", 215 => "H", 216 => "S", 218 => "Ch", 219 => "A", 221 => "E", 222 => "U", 223 => "Y", 224 => "ya", 225 => "b", 226 => "v", 227 => "g", 228 => "d", 229 => "ye", 230 => "j", 231 => "z", 233 => "i", 234 => "k", 235 => "l", 236 => "m", 237 => "n", 238 => "o", 239 => "p", 240 => "r", 241 => "sh", 242 => "c", 243 => "yu", 244 => "f", 245 => "ch", 246 => "t", 247 => "h", 248 => "s", 250 => "c", 251 => "a", 252 => "`", 253 => "e", 254 => "u", 255 => "y", 256 => "i");
    $letters_unicode1 = array(134 => "ӨӨ", 135 => "ҮҮ", 136 => "Өө", 137 => "Үү", 138 => "өө", 139 => "үү", 142 => "гүй", 143 => "ГҮЙ", 144 => "Х", 145 => "х", 148 => "Яах", 149 => "Яаж", 151 => "Ү", 153 => "ү", 154 => "Ө", 156 => "ө", 157 => " нь ", 158 => "яах", 159 => "яаж", 161 => "Й", 162 => "й", 184 => "ё", 185 => "Ё", 186 => "ө", 187 => "Ө", 188 => "Ү", 191 => "ү", 192 => "Я", 193 => "Б", 194 => "В", 195 => "Г", 196 => "Д", 197 => "Е", 198 => "Ж", 199 => "З", 201 => "И", 202 => "К", 203 => "Л", 204 => "М", 205 => "Н", 206 => "О", 207 => "П", 208 => "Р", 209 => "Ш", 210 => "Ц", 211 => "Ю", 212 => "Ф", 213 => "Ч", 214 => "Т", 215 => "Х", 216 => "С", 218 => "Ч", 219 => "А", 221 => "Э", 222 => "У", 223 => "Ы", 224 => "я", 225 => "б", 226 => "в", 227 => "г", 228 => "д", 229 => "е", 230 => "ж", 231 => "з", 233 => "и", 234 => "к", 235 => "л", 236 => "м", 237 => "н", 238 => "о", 239 => "п", 240 => "р", 241 => "ш", 242 => "ц", 243 => "ю", 244 => "ф", 245 => "ч", 246 => "т", 247 => "х", 248 => "с", 250 => "ц", 251 => "а", 252 => "ъ", 253 => "э", 254 => "у", 255 => "ы", 256 => "ь");
    $word = str_replace($letters_unicode1, $letters_latin, $word);

    return $word;
}

function ANSI2uni($word)
{
    $letters_nonuc = array(184 => "&cedil;", 168 => "&uml;", 186 => "&ordm;", 170 => "&ordf;", 175 => "&macr;", 191 => "&iquest;", 192 => "&Agrave;", 193 => "&Aacute;", 194 => "&Acirc;", 195 => "&Atilde;", 196 => "&Auml;", 197 => "&Aring;", 198 => "&AElig;", 199 => "&Ccedil;", 200 => "&Egrave;", 201 => "&Eacute;", 202 => "&Ecirc;", 203 => "&Euml;", 204 => "&Igrave;", 205 => "&Iacute;", 206 => "&Icirc;", 207 => "&Iuml;", 208 => "&ETH;", 209 => "&Ntilde;", 210 => "&Ograve;", 211 => "&Oacute;", 212 => "&Ocirc;", 213 => "&Otilde;", 214 => "&Ouml;", 215 => "&times;", 216 => "&Oslash;", 217 => "&Ugrave;", 218 => "&Uacute;", 219 => "&Ucirc;", 220 => "&Uuml;", 221 => "&Yacute;", 222 => "&THORN;", 223 => "&szlig;", 224 => "&agrave;", 225 => "&aacute;", 226 => "&acirc;", 227 => "&atilde;", 228 => "&auml;", 229 => "&aring;", 230 => "&aelig;", 231 => "&ccedil;", 232 => "&egrave;", 233 => "&eacute;", 234 => "&ecirc;", 235 => "&euml;", 236 => "&igrave;", 237 => "&iacute;", 238 => "&icirc;", 239 => "&iuml;", 240 => "&eth;", 241 => "&ntilde;", 242 => "&ograve;", 243 => "&oacute;", 244 => "&ocirc;", 245 => "&otilde;", 246 => "&ouml;", 247 => "&divide;", 248 => "&oslash;", 249 => "&ugrave;", 250 => "&uacute;", 251 => "&ucirc;", 252 => "&uuml;", 253 => "&yacute;", 254 => "&thorn;", 255 => "&yuml;", 256 => "&ordm;", 257 => "Ó¨", 258 => "Ó©", 259 => "Ò®", 260 => "Ò¯");
    $letters_nonunicode = array(184 => "¸", 168 => "¨", 186 => "º", 170 => "ª", 175 => "¯", 191 => "¿", 192 => "À", 193 => "Á", 194 => "Â", 195 => "Ã", 196 => "Ä", 197 => "Å", 198 => "Æ", 199 => "Ç", 200 => "È", 201 => "É", 202 => "Ê", 203 => "Ë", 204 => "Ì", 205 => "Í", 206 => "Î", 207 => "Ï", 208 => "Ð", 209 => "Ñ", 210 => "Ò", 211 => "Ó", 212 => "Ô", 213 => "Õ", 214 => "Ö", 215 => "×", 216 => "Ø", 217 => "Ù", 218 => "Ú", 219 => "Û", 220 => "Ü", 221 => "Ý", 222 => "Þ", 223 => "ß", 224 => "à", 225 => "á", 226 => "â", 227 => "ã", 228 => "ä", 229 => "å", 230 => "æ", 231 => "ç", 232 => "è", 233 => "é", 234 => "ê", 235 => "ë", 236 => "ì", 237 => "í", 238 => "î", 239 => "ï", 240 => "ð", 241 => "ñ", 242 => "ò", 243 => "ó", 244 => "ô", 245 => "õ", 246 => "ö", 247 => "÷", 248 => "ø", 249 => "ù", 250 => "ú", 251 => "û", 252 => "ü", 253 => "ý", 254 => "þ", 255 => "ÿ", 256 => "º", 257 => "Є", 258 => "є", 259 => "Ї", 260 => "ї");
    $letters_unicode = array(184 => "ё", 168 => "Ё", 186 => "ө", 170 => "Ө", 175 => "Ү", 191 => "ү", 192 => "А", 193 => "Б", 194 => "В", 195 => "Г", 196 => "Д", 197 => "Е", 198 => "Ж", 199 => "З", 200 => "И", 201 => "Й", 202 => "К", 203 => "Л", 204 => "М", 205 => "Н", 206 => "О", 207 => "П", 208 => "Р", 209 => "С", 210 => "Т", 211 => "У", 212 => "Ф", 213 => "Х", 214 => "Ц", 215 => "Ч", 216 => "Ш", 217 => "Щ", 218 => "Ъ", 219 => "Ы", 220 => "Ь", 221 => "Э", 222 => "Ю", 223 => "Я", 224 => "а", 225 => "б", 226 => "в", 227 => "г", 228 => "д", 229 => "е", 230 => "ж", 231 => "з", 232 => "и", 233 => "й", 234 => "к", 235 => "л", 236 => "м", 237 => "н", 238 => "о", 239 => "п", 240 => "р", 241 => "с", 242 => "т", 243 => "у", 244 => "ф", 245 => "х", 246 => "ц", 247 => "ч", 248 => "ш", 249 => "щ", 250 => "ъ", 251 => "ы", 252 => "ь", 253 => "э", 254 => "ю", 255 => "я", 256 => "ө", 257 => "Ө", 258 => "ө", 259 => "Ү", 260 => "ү");
    $word = str_replace($letters_nonunicode, $letters_unicode, $word);
    $word = str_replace($letters_nonuc, $letters_unicode, $word);
    return $word;
}


function uni2ANSI($word)
{
    //$letters_nonuc = array(184 => "&cedil;", 168 => "&uml;", 186 => "&ordm;", 170 => "&ordf;", 175 => "&macr;", 191 => "&iquest;", 192 => "&Agrave;", 193 => "&Aacute;", 194 => "&Acirc;", 195 => "&Atilde;", 196 => "&Auml;", 197 => "&Aring;", 198 => "&AElig;", 199 => "&Ccedil;", 200 => "&Egrave;", 201 => "&Eacute;", 202 => "&Ecirc;", 203 => "&Euml;", 204 => "&Igrave;", 205 => "&Iacute;", 206 => "&Icirc;", 207 => "&Iuml;", 208 => "&ETH;", 209 => "&Ntilde;", 210 => "&Ograve;", 211 => "&Oacute;", 212 => "&Ocirc;", 213 => "&Otilde;", 214 => "&Ouml;", 215 => "&times;", 216 => "&Oslash;", 217 => "&Ugrave;", 218 => "&Uacute;", 219 => "&Ucirc;", 220 => "&Uuml;", 221 => "&Yacute;", 222 => "&THORN;", 223 => "&szlig;", 224 => "&agrave;", 225 => "&aacute;", 226 => "&acirc;", 227 => "&atilde;", 228 => "&auml;", 229 => "&aring;", 230 => "&aelig;", 231 => "&ccedil;", 232 => "&egrave;", 233 => "&eacute;", 234 => "&ecirc;", 235 => "&euml;", 236 => "&igrave;", 237 => "&iacute;", 238 => "&icirc;", 239 => "&iuml;", 240 => "&eth;", 241 => "&ntilde;", 242 => "&ograve;", 243 => "&oacute;", 244 => "&ocirc;", 245 => "&otilde;", 246 => "&ouml;", 247 => "&divide;", 248 => "&oslash;", 249 => "&ugrave;", 250 => "&uacute;", 251 => "&ucirc;", 252 => "&uuml;", 253 => "&yacute;", 254 => "&thorn;", 255 => "&yuml;", 256 => "&ordm;", 257 => "Ó¨", 258 => "Ó©", 259 => "Ò®", 260 => "Ò¯");
    $letters_nonunicode = array(184 => "¸", 168 => "¨", 186 => "º", 170 => "ª", 175 => "¯", 191 => "¿", 192 => "À", 193 => "Á", 194 => "Â", 195 => "Ã", 196 => "Ä", 197 => "Å", 198 => "Æ", 199 => "Ç", 200 => "È", 201 => "É", 202 => "Ê", 203 => "Ë", 204 => "Ì", 205 => "Í", 206 => "Î", 207 => "Ï", 208 => "Ð", 209 => "Ñ", 210 => "Ò", 211 => "Ó", 212 => "Ô", 213 => "Õ", 214 => "Ö", 215 => "×", 216 => "Ø", 217 => "Ù", 218 => "Ú", 219 => "Û", 220 => "Ü", 221 => "Ý", 222 => "Þ", 223 => "ß", 224 => "à", 225 => "á", 226 => "â", 227 => "ã", 228 => "ä", 229 => "å", 230 => "æ", 231 => "ç", 232 => "è", 233 => "é", 234 => "ê", 235 => "ë", 236 => "ì", 237 => "í", 238 => "î", 239 => "ï", 240 => "ð", 241 => "ñ", 242 => "ò", 243 => "ó", 244 => "ô", 245 => "õ", 246 => "ö", 247 => "÷", 248 => "ø", 249 => "ù", 250 => "ú", 251 => "û", 252 => "ü", 253 => "ý", 254 => "þ", 255 => "ÿ", 256 => "º", 257 => "Є", 258 => "є", 259 => "Ї", 260 => "ї");
    $letters_unicode = array(184 => "ё", 168 => "Ё", 186 => "ө", 170 => "Ө", 175 => "Ү", 191 => "ү", 192 => "А", 193 => "Б", 194 => "В", 195 => "Г", 196 => "Д", 197 => "Е", 198 => "Ж", 199 => "З", 200 => "И", 201 => "Й", 202 => "К", 203 => "Л", 204 => "М", 205 => "Н", 206 => "О", 207 => "П", 208 => "Р", 209 => "С", 210 => "Т", 211 => "У", 212 => "Ф", 213 => "Х", 214 => "Ц", 215 => "Ч", 216 => "Ш", 217 => "Щ", 218 => "Ъ", 219 => "Ы", 220 => "Ь", 221 => "Э", 222 => "Ю", 223 => "Я", 224 => "а", 225 => "б", 226 => "в", 227 => "г", 228 => "д", 229 => "е", 230 => "ж", 231 => "з", 232 => "и", 233 => "й", 234 => "к", 235 => "л", 236 => "м", 237 => "н", 238 => "о", 239 => "п", 240 => "р", 241 => "с", 242 => "т", 243 => "у", 244 => "ф", 245 => "х", 246 => "ц", 247 => "ч", 248 => "ш", 249 => "щ", 250 => "ъ", 251 => "ы", 252 => "ь", 253 => "э", 254 => "ю", 255 => "я", 256 => "ө", 257 => "Ө", 258 => "ө", 259 => "Ү", 260 => "ү");
    $word = str_replace($letters_unicode, $letters_nonunicode, $word);
    //$word = str_replace($letters_unicode, $letters_nonuc, $word);
    return $word;
}
