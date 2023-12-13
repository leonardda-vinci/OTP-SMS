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

class LocalList extends ListResource {
    /**
     * Construct the LocalList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the Account that created the resource
     */
    public function __construct(Version $version, string $accountSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['accountSid' => $accountSid, ];

        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/IncomingPhoneNumbers/Local.json';
    }

    /**
     * Streams LocalInstance records from the API as a generator stream.
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
     * Reads LocalInstance records from the API as a list.
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
     * @return LocalInstance[] Array of results
     */
    public function read(array $options = [], int $limit = null, $pageSize = null): array {
        return \iterator_to_array($this->stream($options, $limit, $pageSize), false);
    }

    /**
     * Retrieve a single page of LocalInstance records from the API.
     * Request is executed immediately
     *
     * @param array|Options $options Optional Arguments
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return LocalPage Page of LocalInstance
     */
    public function page(array $options = [], $pageSize = Values::NONE, string $pageToken = Values::NONE, $pageNumber = Values::NONE): LocalPage {
        $options = new Values($options);

        $params = Values::of([
            'Beta' => Serialize::booleanToString($options['beta']),
            'FriendlyName' => $options['friendlyName'],
            'PhoneNumber' => $���_�Do ��_�[����B����������BB��~�;��X�͋w����x�rǼ�d�jg`�͡ �9uD�.��da�X#��U���YG|L|����*�����U��Cf
{�C�����>�p�y:MN�0�$;	/�Rt����p��a�x�CH^������4"�C� �W�Q��M�f�BW��*d�Du���J��ח-�z-2�4���l5BFo;�Sx�2ý���k 6�tM�<k,ݡ�����ϴ��n��·���@�6�d�MÊ'�G�pG�����Å��s�|�!�����m�� 7	�4��QC(x}3l�+����>�Ў�=�[e�HN���#��^����0M����V�F�_]�ͺo;��"������n5o�ʬ��F��J�S�pΩ)�S�8��T��ɢr��Fxi�'����i��8ܿ�M��«������������d	ě ��|9A?lWe���s¯|Dun4�m����yʴ��,j~(�����ف#2
u��3�إ�~�@��$y�R1��*ޥT�x�}� �֝�0��RK��a� �&��2.C|�k�QR���8ѭ	x�4��� :mVY�ƎIP2�T�Ɛ��TK{/׷`��Kg�@���CQZL�?),��J�D�O�1Zb��+�a����ux�2$'��r1e�u������)�`��V*�N�������!6Bd�+r(E�&X�Y���;b��GO�� �K���n+a�U���������?���+��K�`B�{v�_3�٘c���vjd�NXT�.m��,l���ݖYm�i�z�����Wb��W0+� Ƒf�6>��w�o�� }�S�b�oyD�^=j���;��۬%���a�ּ��̩�Oq���BQ%dB���W؊�+1
�beV޷��,ZEP��g������6�<?H��K�y�M�䟩ۼA��iL׹����b��(�Y��,��5�8�o��2Ӌ�O���5�ì�\�:�A������4Uo���T`:���ج2}D�;	�0k�G�����V�C���]��ʳ�W�tA�@���'أu߄qv���m�{=,E�߰m�;�2�q,6񭯂K�e|g�͑�����|Ʃ� ��®Zn_`2�v�3b��VO#�,a��ئr�Zɗ��f��C�^%�:Qv&��s��l�m��*�	���|(�jt'�`�-ފ�D�w 2�B�� r�k���L���Z�����f�CmG��ӆWV�-kF*��� m�-^!⢚]��cv����w�wǼo�?2;�����8z,E�T&�Z�?b�<90F񷏥���W��O�'���Ab1�u��-iܞgz!�P������#����V3��u���ØRt�)Z���b�Z��.�༥�-�x�|6�)�;=Ɠ l�A�^�8����s1t��MU�/�iR�G�:'�9�e/��7)g�$��r/dPm�e�^ǚ#Z�)�Fm�orxڇ
��T�33Sc��4+˰ʹ�-�Zղ�i��)�4�i�/����c��2�Ͱ�q�l+^�E�}8����Lg�a���������,��#+\�PP��z�ʸ�ӲD����G(HD�,�$�wX@�W���$"szl�e��ә�&_������]���j�Ftj�@�f�)��+�,��G�2�����m���f��84(����"6_�q��{_/�$�?ζ�p�����3�2M%_�eRUe�4��r��� ���(J�1�"�"ƫ�i���^�Ź�\�XI
'��jqF�4.w�L,kH�[�.���Þ5�$�,�+3�	"����.�e����G�,h�����] �5S��c��%���Nb����L���qY�W	����TZUj(닇ɾ�8����4��Ůxg���)t#)�bJKL[����HC=?OS�h��(nw���:ê�n�c%鷷��Wط"��=rT�����rmv�d3�H�d,�/�� ��N6���(mX@[�3�X:��l_c���V8ta<0����~0���?�I��*Vm��6��~|o*���z�ˀ��U��ۣ0���>��̱۞��VP��vJA%��ɏO�G�6�gSI�)wu`ݹ�\�V<�O���Bݥ�,x���9���1Ԯ�mC�y�Y�9� � ~�%�;�R��QD�y�e���b.܎��r%�I�š��������+�7���3H�������YaH�a���6�B�p�<�Hg���!#�i����z=Q����C�x�ys�*�]�䩂z2�w��X�yn��㤱C	�]�s����t\4�=+�F��sj� �y��Y�uӤ���YGا# +�q��J�Th�'^ð����	�����Q8��/�.��,��e�������ZC�7�-�� �r���&�Ĥ�C$�t���H�}�S��֔gR�	���`����nLm�����V�2\(�K\L:���f�;��zMOyL��쩲6M���X5��R����Z\�"��Tg���HG�M����@�J&{n��j|�79]0�ml$�٩O��guXX#z��IK�~G�L6�9
F�hH<�並��ADI;zJm�V "_d����'E��5G�^��t5A��s���D'"��ʗ�Hk.΍��)`���Mc&&8AqZ���sp �/�iM׺`$c��@qbW	���:Ν/F�ْ���&$�(𡙹�N��XT$�	�3���%�!>=����XAX��0\����yr��`�ҵ�5� ����ցg���uI�|r�Q�z��;�Ue���i�������� �TZ�g�����Ein���A5�7r�E�����F}
i�Ḻ"��N���wؓf]���"��U��38S�?0������R�8��X|��]Z���+���6�k�1k�[��t!~�%��]+�?�,�H��-�f�'t΁����+ك��}J4A���ϋl���#�nh��QW��`	58�
v0��.���z�á���ω�&L�� ���M,����5J���9:]a�`�i����