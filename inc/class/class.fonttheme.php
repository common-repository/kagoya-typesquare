<?php

class TypeSquare_ST_Fonttheme {
	private static $fonttheme;
	private static $instance;

	private function __construct(){}

	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			$c = __CLASS__;
			self::$instance = new $c();
		}
		return self::$instance;
	}

	public static function get_fonttheme() {
		static $fonttheme;

		$fonttheme = array(
			'basic' => array(
				'name'	=> 'ベーシック',
				'fonts' => array(
					'title'   => '見出ゴMB31',
					'lead'    => '新ゴ M',
					'content' => '新ゴ R',
					'bold'    => '新ゴ M',
				),
			),
			'news' => array(
				'name'	=> 'ニュース',
				'fonts' => array(
					'title'   => 'A1ゴシック M',
					'lead'    => 'UD新ゴ M',
					'content' => 'UD新ゴ R',
					'bold'    => 'UD新ゴ M',
				),
			),
			'fashion' => array(
				'name'	=> 'ファッション',
				'fonts' => array(
					'title'   => '丸フォーク B',
					'lead'    => '丸フォーク R',
					'content' => 'フォーク R',
					'bold'    => 'フォーク M',
				),
			),
			'pop' => array(
				'name'	=> 'ポップ',
				'fonts' => array(
					'title'   => '新ゴ 太ライン',
					'lead'    => 'はるひ学園',
					'content' => 'じゅん 201',
					'bold'    => 'じゅん 501',
				),
			),
			'elegant' => array(
				'name'	=> 'エレガント',
				'fonts' => array(
					'title'   => 'A1明朝',
					'lead'    => 'A1明朝',
					'content' => 'カクミン R',
					'bold'    => 'リュウミン M-KL',
				),
			),
			'wafu' => array(
				'name'	=> '和風',
				'fonts' => array(
					'title'   => '教科書ICA R',
					'lead'    => '教科書ICA R',
					'content' => 'みちくさ',
					'bold'    => 'みちくさ',
				),
			),
			'art' => array(
				'name'	=> 'アート',
				'fonts' => array(
					'title'   => '黒曜',
					'lead'    => '見出ゴMB31',
					'content' => 'シネマレター',
					'bold'    => '見出ゴMB31',
				),
			),
			'modern' => array(
				'name'	=> 'モダン',
				'fonts' => array(
					'title'   => 'すずむし',
					'lead'    => 'トーキング',
					'content' => 'ナウ-GM',
					'bold'    => 'ナウ-GM',
				),
			),
			'smartphone' => array(
				'name'	=> 'スマホ',
				'fonts' => array(
					'title'   => 'UD新ゴ M',
					'lead'    => 'UD新ゴ R',
					'content' => 'UD新ゴ コンデンス90 L',
					'bold'    => 'UD新ゴ コンデンス90 M',
				),
			),
			'smartphone2' => array(
				'name'	=> 'スマホ文字多',
				'fonts' => array(
					'title'   => 'UD新ゴ コンデンス90 M',
					'lead'    => 'UD新ゴ コンデンス70 M',
					'content' => 'UD新ゴ コンデンス90 L',
					'bold'    => 'UD新ゴ コンデンス70 M',
				),
			),
		);

		$options = get_option( 'typesquare_custom_theme' );
		if ( $options && isset( $options['theme'] ) && is_array( $options['theme'] ) ) {
			$fonttheme = $fonttheme + $options['theme'];
		}
		return $fonttheme;
	}

	public static function get_custom_theme_json() {
		$options = get_option( 'typesquare_custom_theme' );
		return json_encode($options['theme']);
	}
}
