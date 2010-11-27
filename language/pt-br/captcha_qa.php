<?php
/**
*
* captcha_qa [Brazilian Portuguese]
*
* @package language
* @version $Id$
* @copyright (c) 2010 Suporte phpBB < http://www.suportephpbb.com.br >
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Original copyright: (c) 2009 phpBB Group
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CAPTCHA_QA'				=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Esta pergunta é uma maneira de  prevenir envios automáticos de spambots.',
	'CONFIRM_QUESTION_WRONG'	=> 'Você digitou uma resposta inválida para a pergunta.',

	'QUESTION_ANSWERS'			=> 'Respostas',
	'ANSWERS_EXPLAIN'			=> 'Por favor, digite respostas válidas para a pergunta, uma por linha.',
	'CONFIRM_QUESTION'			=> 'Pergunta',

	'ANSWER'					=> 'Resposta',
	'EDIT_QUESTION'				=> 'Editar pergunta',
	'QUESTIONS'					=> 'Perguntas',
	'QUESTIONS_EXPLAIN'			=> 'Para cada apresentação do formulário onde o plugin Q&amp;A estiver ativado, os usuários serão solicitados a responder uma perguntar especificada aqui. Para usar este plugin, ao menos uma questão deve se definida no idioma padrão. Essa perguntas devem ser fáceis para o público alvo em que você deseja atingir, mas que dificulte a capacidade dos bots em achar as respostas em pesquisas do Google™. Usando um largo e diversificado número de perguntas trará melhores resultados. Ative a configuração strict se sua pergunta requer o uso de maiúsculas e minúsculas, pontuação ou espaços em branco.',
	'QUESTION_DELETED'			=> 'Pergunta excluída',
	'QUESTION_LANG'				=> 'Idioma',
	'QUESTION_LANG_EXPLAIN'		=> 'O idioma em que essa pergunta e suas respostas estão escritas.',
	'QUESTION_STRICT'			=> 'Verificar Strict',
	'QUESTION_STRICT_EXPLAIN'	=> 'Ativar mistura de maiúsculas e minusculas, pontuação e espaços em branco.',

	'QUESTION_TEXT'				=> 'Pergunta',
	'QUESTION_TEXT_EXPLAIN'		=> 'A pergunta apresentada ao usuário.',

	'QA_ERROR_MSG'				=> 'Por favor, preencha todos os campos e digite ao menos uma resposta.',
	'QA_LAST_QUESTION'			=> 'Você não pode excluir todas as perguntas enquanto este plugin estiver ativo.',

));

?>