<?php

namespace App\Core;

class Components
{

    public static function getAvatar($options)
    {
        $avatarClasses         = array();
        $avatarInitialsClasses = array();

        // Set default options
        if (isset($options['circle']) === false) {
            $options['circle'] = true;
        }

        if (isset($options['size']) === false) {
            $options['size'] = '40px';
        }

        if (isset($options['initials'])) {
            if (isset($options['initials']['font-size']) === false) {
                $options['initials']['font-size'] = '40px';
            }
        }

        // Class
        if (isset($options['class'])) {
            $avatarClasses[] = $options['class'];
        }

        // Size
        if ($options['size']) {
            $avatarClasses[] = 'symbol-'.$options['size'];
        }

        // Shape
        if ($options['circle'] === true) {
            $avatarClasses[] = 'symbol-circle';
        }

        // Initials
        if (isset($options['initials'])) {
            if (isset($options['initials']['state'])) {
                $avatarInitialsClasses[] = 'bg-light-'.$options['initials']['state'];
                $avatarInitialsClasses[] = 'text-'.$options['initials']['state'];
            }

            if (isset($options['initials']['font-size'])) {
                $avatarInitialsClasses[] = $options['initials']['font-size'];
            }

            if (isset($options['initials']['font-weight'])) {
                $avatarInitialsClasses[] = $options['initials']['font-weight'];
            }
        }

        $html = '';

        $html .= '<!--begin::Avatar-->';
        $html .= '<div class="symbol '.util()->getHtmlClass($avatarClasses, false).'">';

        if (isset($options['avatar'])) {
            $html .= '<img alt="Pic" src="'.asset(theme()->getMediaUrlPath().$options['avatar']).'"/>';
        } else {
            $html .= '<span class="symbol-label '.util()->getHtmlClass($avatarInitialsClasses, false).'">';
            $html .= $options['initials']['label'];
            $html .= '</span>';
        }

        // Online badge
        if (isset($options['badge'])) {
            $html .= $options['badge'];
        }

        $html .= '</div>';
        $html .= '<!--end::Avatar-->';

        return $html;
    }
}
