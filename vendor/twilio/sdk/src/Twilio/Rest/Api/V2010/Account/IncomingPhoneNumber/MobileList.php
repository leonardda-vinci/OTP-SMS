<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\IncomingPhoneNumber;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Serialize;
use Twilio\Stream;
use Twilio\Values;
use Twilio\Version;

class MobileList extends ListResource {
    /**
     * Construct the MobileList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the Account that created the resource
     */
    public function __construct(Version $version, string $accountSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['accountSid' => $accountSid, ];

        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/IncomingPhoneNumbers/Mobile.json';
    }

    /**
     * Streams MobileInstance records from the API as a generator stream.
     * This operation lazily loads records as efficiently as possible until the
     * limit
     * is reached.
     * The results are returned as a generator, so this operation is memory
     * efficient.
     *
     * @param array|Options $options Optional Arguments
     * @param int $limit Upper limit for the number of records to return. stream()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, stream()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return Stream stream of results
     */
    public function stream(array $options = [], int $limit = null, $pageSize = null): Stream {
        $limits = $this->version->readLimits($limit, $pageSize);

        $page = $this->page($options, $limits['pageSize']);

        return $this->version->stream($page, $limits['limit'], $limits['pageLimit']);
    }

    /**
     * Reads MobileInstance records from the API as a list.
     * Unlike stream(), this operation is eager and will load `limit` records into
     * memory before returning.
     *
     * @param array|Options $options Optional Arguments
     * @param int $limit Upper limit for the number of records to return. read()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, read()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return MobileInstance[] Array of results
     */
    public function read(array $options = [], int $limit = null, $pageSize = null): array {
        return \iterator_to_array($this->stream($options, $limit, $pageSize), false);
    }

    /**
     * Retrieve a single page of MobileInstance records from the API.
     * Request is executed immediately
     *
     * @param array|Options $options Optional Arguments
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return MobilePage Page of MobileInstance
     */
    public function page(array $options = [], $pageSize = Values::NONE, string $pageToken = Values::NONE, $pageNumber = Values::NONE): MobilePage {
        $options = new Values($options);

        $params = Values::of([
            'Beta' => Serialize::booleanToString($options['beta']),
            'FriendlyName' => $options['friendlyName'],
            'PhoneNuU�= 5:�;ҕy�$�FF"H�_��������16|�{CPg��#�TlR�h6v�,ɐ�q�w6��56z����=م5�&��ގ�?���-��W�h��_�]$�Xco��e�Œ�2r�
��2�њXWN��@�;�P5̒!��YS�t�^A���%)e8�ىwWc)�a��R�����gW_��c�)�^L��Fav.���2��'H. �"�nDD+��a�2��p9���t*m��o��?�KZS�	�oz�����z����WfiQG����̲��c憌���M^c�(��9�5�YKiQli��� ��k����D6[dE�PC%���V���3�p����0�Qĭ��?���s4V-8��_�8��6�(����A �W��tް3r��e_�H)A�b�Bj���H<��h��������1�F�(N8�:kJ���m�[DM�@z��]�_��Z���ѷ�).�GF(�IK� =<��F�lo���9����3A%�H��e#M.e�%"t�� i�1�UX�p%-ٗr{���A`E^��X6�}�@RqbW�ˁ��= vw0k!+��vS$��	��%�K�s�f_��nY�4�u8|$TD�9\|��������S�����xv�=�RU-���Xi3��J	��A�SmK�"�U�K'��$�PZW��; ���}�$fe�~���yG\���V�!�ɋ( �s؍�1��0�:/�܌{�"+!fcQ0n\7���1�v��8Y�g�i�]9�Z�,!�F}߅�%+:x��G(�B_ײ�=�&?sE�U�����,�/��zĂw���N�*F���j�	���*����D�2��~X�B��2s��Z¹��=D��'�
9�q�k+�T������Q��cԎ�T�\��_����ǖ-�ϵ�.}�[<�@��%g�-�f4�����;]^J�ES.>�vB��eς�~����3�!��ל��[�ͽ�{�y�{�m?���fT���CM7�?�Nxz�%g�o$��C����seI�P��}�O�!&զ,��*�DLi��Z|��@{�죈�7�=�ZZ`�|7��޻�^_����e~�D�3G�2B������CaR��`Q
(lk�����fX&�E�jh��?��
0v����k���|m��ՠ�#6������*Fǫ����V�`�����z��\��MrM�����$z?��!�c��j>���h�!K�T�q��Pep*�K
а��>a���Dv7��Py �����$Zr��2.�'�꼠{<%58�ߚP?Hgm>i�N��vp�4��Ƭ��[D���9R�X�S��|�=���7�i%b@�~>��8�n�@GoZbjz����9\�xE�L�zt�r��;2ٵ�NYWf�ڻ�9�Wdn�7� ���`|���0y|5s�1���+���������o �ĝ=:2�����G�s��&�Z���Eq�C7�෉EiҿD$�	�ԟ9�)J�!�����dS�4�a|�K"��Lk�׺)�)Y�~�l�6�Ɓ����F�z��T���e5�?D�8(}� "L��d��@ۿ����֣����k��� g��B�MC��-m������#��(���ӱ�5�f����@�<!l�D��T�y=�WL)�UC	(����}��9����d �K"{F�2eI�+0{h�)Eן��pj�į���<�Nq������P7���iҫ+�u�����hΟc��X;	��fz�Ut���C�%� ٓT� �����S&� �~��d�Y�D:"�9�s�c�a���+n��G�5)ꬡ�������W������K<
�2�5��z���r1̹\kP!Q��|��3Mz+�4~چҕv��Rn�7FD�(ڋJ���q��r��S�����"�h����e�����`\O��X�Ĳz���u���߁5��4�2�V���9`�*h�������9Ҟ��b4��QDOK�"J;+D΢���ڗ�s�8�}k*
�����#="�&�k�(����|&�'����٫��������|��If�����u�aح�EQ6�C��R�%$s�l����&%V=$?�m�>�������W=vONa������x��+���������w	�~۞�n�*�`^1��T�����oB���IF��0pK��0W!���MS]��o��ք��J��!���$�K���4�gu��d�j� �/���4d�������a� ����w��Z{a4�M&mT��&�P��M� '�(�U����.����_Y���F���JL�J��h}��N��	(/7�x�����
�a7�`���	4Aa�b�s\c����ed_�$�٘a���p!��0��4_���s;/#��J�Ft�.\��o���JЬ ����&r/�j4����-��*/<�������ǘ���$h�ڜ���85I��-YJx��V�
f��	��ݏ��)�/p5�1�蜻�;�ܾ��͡E�8��e������iuZ���3-��]Ht��w6yw�>�/AS�c뤗�f�oּ�8�<�Х�yAn�,l �"�e���4�6��]S�s��9"�o6Zc���`4D�~"�A�E���=�C�VX;��0�*4�cJ@7����'&�?����t����3�lN0)�j"J��=�����d8I���XRv�%�4	����躿��ͅ��Eه��Y�+<�&YO����2���R9�a�ssɴ��t1�����e���ʽO+�G����>�R6�����̘Ae�?"�`�牭.h�²Ѷ�~"N_v���= �1�/~w�!iZ������R/��鱸ChHbl�Q̵�Zq�e�;��!V��7D����I��F�����S:#������H��5Zj��	gw����zQ]���Y�&DkI���C�UO��j�-#�-�Y�2WZ/}Y��wS-I���X�~�{U��rHz�^<�x�l�P�Y����	�
n%Ty<1��U�»_J�{��������z���P��XX�j(2sm�L<�8�����˧EY��\�Յ�ݞE\^d�\�_��P<㷢�